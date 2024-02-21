<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudphone\V20201230\Models\ListKeyPairsResponseBody\keyPairs;

use AlibabaCloud\Tea\Model;

class keyPair extends Model
{
    /**
     * @description The time when the key pair was created.
     *
     * @example 2021-03-04T13:35:00Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The fingerprint of the key pair.
     *
     * @example ABC1234567
     *
     * @var string
     */
    public $keyPairFingerPrint;

    /**
     * @description The name of the SSH key pair.
     *
     * @example testKeyPairName
     *
     * @var string
     */
    public $keyPairName;
    protected $_name = [
        'creationTime'       => 'CreationTime',
        'keyPairFingerPrint' => 'KeyPairFingerPrint',
        'keyPairName'        => 'KeyPairName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->keyPairFingerPrint) {
            $res['KeyPairFingerPrint'] = $this->keyPairFingerPrint;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keyPair
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['KeyPairFingerPrint'])) {
            $model->keyPairFingerPrint = $map['KeyPairFingerPrint'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }

        return $model;
    }
}
