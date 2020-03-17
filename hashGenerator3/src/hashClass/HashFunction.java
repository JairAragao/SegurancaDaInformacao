package hashClass;


import java.io.File;
import java.nio.file.Files;
import java.security.MessageDigest;

import javax.xml.bind.DatatypeConverter;

//Disponível para: MD5, SHA-1,SHA-224,SHA-256, SHA-384, SHA-512
public class HashFunction {

	public static String getHash(byte[] inputBytes, String algorithm) {
		String hashValue = "";
		try {
			MessageDigest messageDigest = MessageDigest.getInstance(algorithm);
			messageDigest.update(inputBytes);
			byte[] digestedBytes = messageDigest.digest();
			hashValue = DatatypeConverter.printHexBinary(digestedBytes).toLowerCase();

		}

		catch (Exception e) {

		}

		return hashValue;
	}

	public static void main(String[] args) {

		try {

			File image = new File("C:\\Users\\rmsil\\Desktop\\testeHash.txt");
			byte[] imageBytes = Files.readAllBytes(image.toPath());
			System.out.println(getHash(imageBytes, "SHA-1"));

		} catch (Exception e) {

		}

	}

}
