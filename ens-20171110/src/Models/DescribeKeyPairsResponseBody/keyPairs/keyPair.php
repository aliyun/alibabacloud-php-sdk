<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeKeyPairsResponseBody\keyPairs;

use AlibabaCloud\Dara\Model;

class keyPair extends Model
{
    /**
     * @var string
     */
    public $creationTime;

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
    protected $_name = [
        'creationTime' => 'CreationTime',
        'keyPairFingerPrint' => 'KeyPairFingerPrint',
        'keyPairId' => 'KeyPairId',
        'keyPairName' => 'KeyPairName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->keyPairFingerPrint) {
            $res['KeyPairFingerPrint'] = $this->keyPairFingerPrint;
        }

        if (null !== $this->keyPairId) {
            $res['KeyPairId'] = $this->keyPairId;
        }

        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['KeyPairFingerPrint'])) {
            $model->keyPairFingerPrint = $map['KeyPairFingerPrint'];
        }

        if (isset($map['KeyPairId'])) {
            $model->keyPairId = $map['KeyPairId'];
        }

        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }

        return $model;
    }
}
