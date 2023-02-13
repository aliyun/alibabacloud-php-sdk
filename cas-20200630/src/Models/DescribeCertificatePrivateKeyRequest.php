<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Tea\Model;

class DescribeCertificatePrivateKeyRequest extends Model
{
    /**
     * @description The password that is used to encrypt the private key. The password can contain letters, digits, and special characters, such as `, + - _ #`. The password can be up to 32 bytes in length.
     *
     **
     *
     **Warning** You must remember the password that you specify. The password is required to decrypt the encrypted private key. If you forget the password, the encrypted private key that is returned cannot be decrypted. You must call this operation again.
     *
     * @example !QA@WS3ed
     *
     * @var string
     */
    public $encryptedCode;

    /**
     * @description The unique identifier of the client certificate or server certificate that you want to query.
     *
     * >  You can call the [ListClientCertificate](~~330884~~) operation to query the unique identifiers of all client certificates and server certificates.
     * @example bc37133bb7ed68c7938d928fd26d****
     *
     * @var string
     */
    public $identifier;
    protected $_name = [
        'encryptedCode' => 'EncryptedCode',
        'identifier'    => 'Identifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encryptedCode) {
            $res['EncryptedCode'] = $this->encryptedCode;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCertificatePrivateKeyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EncryptedCode'])) {
            $model->encryptedCode = $map['EncryptedCode'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }

        return $model;
    }
}
