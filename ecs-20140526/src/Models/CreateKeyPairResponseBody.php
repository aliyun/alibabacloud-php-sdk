<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CreateKeyPairResponseBody extends Model
{
    /**
     * @var string
     */
    public $keyPairFingerPrint;

    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $keyPairId;

    /**
     * @var string
     */
    public $privateKeyBody;
    protected $_name = [
        'keyPairFingerPrint' => 'KeyPairFingerPrint',
        'keyPairName'        => 'KeyPairName',
        'requestId'          => 'RequestId',
        'keyPairId'          => 'KeyPairId',
        'privateKeyBody'     => 'PrivateKeyBody',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyPairFingerPrint) {
            $res['KeyPairFingerPrint'] = $this->keyPairFingerPrint;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->keyPairId) {
            $res['KeyPairId'] = $this->keyPairId;
        }
        if (null !== $this->privateKeyBody) {
            $res['PrivateKeyBody'] = $this->privateKeyBody;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateKeyPairResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyPairFingerPrint'])) {
            $model->keyPairFingerPrint = $map['KeyPairFingerPrint'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['KeyPairId'])) {
            $model->keyPairId = $map['KeyPairId'];
        }
        if (isset($map['PrivateKeyBody'])) {
            $model->privateKeyBody = $map['PrivateKeyBody'];
        }

        return $model;
    }
}
