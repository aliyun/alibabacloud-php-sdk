<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;

class CreateKeyPairResponseBody extends Model
{
    /**
     * @var string
     */
    public $keyPairFingerPrint;

    /**
     * @var string
     */
    public $keyPairId;

    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @var string
     */
    public $privateKeyBody;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'keyPairFingerPrint' => 'KeyPairFingerPrint',
        'keyPairId' => 'KeyPairId',
        'keyPairName' => 'KeyPairName',
        'privateKeyBody' => 'PrivateKeyBody',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyPairFingerPrint) {
            $res['KeyPairFingerPrint'] = $this->keyPairFingerPrint;
        }

        if (null !== $this->keyPairId) {
            $res['KeyPairId'] = $this->keyPairId;
        }

        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }

        if (null !== $this->privateKeyBody) {
            $res['PrivateKeyBody'] = $this->privateKeyBody;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyPairFingerPrint'])) {
            $model->keyPairFingerPrint = $map['KeyPairFingerPrint'];
        }

        if (isset($map['KeyPairId'])) {
            $model->keyPairId = $map['KeyPairId'];
        }

        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }

        if (isset($map['PrivateKeyBody'])) {
            $model->privateKeyBody = $map['PrivateKeyBody'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
