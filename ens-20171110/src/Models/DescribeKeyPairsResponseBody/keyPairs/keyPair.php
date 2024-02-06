<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeKeyPairsResponseBody\keyPairs;

use AlibabaCloud\Tea\Model;

class keyPair extends Model
{
    /**
     * @description The time when the key pair was created. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2020-04-26T15:38:27Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The fingerprint of the key pair.
     *
     * @example fdaf8ff7a756ef843814fc****
     *
     * @var string
     */
    public $keyPairFingerPrint;

    /**
     * @var string
     */
    public $keyPairId;

    /**
     * @description The name of the SSH key pair.
     *
     * @example TestKeyPairName
     *
     * @var string
     */
    public $keyPairName;
    protected $_name = [
        'creationTime'       => 'CreationTime',
        'keyPairFingerPrint' => 'KeyPairFingerPrint',
        'keyPairId'          => 'KeyPairId',
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
        if (null !== $this->keyPairId) {
            $res['KeyPairId'] = $this->keyPairId;
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
        if (isset($map['KeyPairId'])) {
            $model->keyPairId = $map['KeyPairId'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }

        return $model;
    }
}
