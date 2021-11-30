<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Tea\Model;

class DescribeCertificatePrivateKeyResponseBody extends Model
{
    /**
     * @var string
     */
    public $encryptedData;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'encryptedData' => 'EncryptedData',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encryptedData) {
            $res['EncryptedData'] = $this->encryptedData;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCertificatePrivateKeyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EncryptedData'])) {
            $model->encryptedData = $map['EncryptedData'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
