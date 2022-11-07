<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudphone\V20201230\Models\ListKeyPairsResponseBody\keyPairs;

use AlibabaCloud\Tea\Model;

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
