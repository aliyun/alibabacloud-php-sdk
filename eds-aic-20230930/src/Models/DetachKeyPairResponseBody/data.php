<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DetachKeyPairResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The IDs of the cloud phone instances from which the ADB key pair is successfully detached.
     *
     * @var string[]
     */
    public $detachedInstanceIds;

    /**
     * @description The number of the cloud phone instances from which the ADB key pair failed to be detached.
     *
     * @example 0
     *
     * @var int
     */
    public $failCount;

    /**
     * @description The ID of the ADB key pair.
     *
     * @example kp-6v2q33ae4tw3a****
     *
     * @var string
     */
    public $keyPairId;

    /**
     * @description The total number of the cloud phone instances.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'detachedInstanceIds' => 'DetachedInstanceIds',
        'failCount'           => 'FailCount',
        'keyPairId'           => 'KeyPairId',
        'totalCount'          => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detachedInstanceIds) {
            $res['DetachedInstanceIds'] = $this->detachedInstanceIds;
        }
        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }
        if (null !== $this->keyPairId) {
            $res['KeyPairId'] = $this->keyPairId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetachedInstanceIds'])) {
            if (!empty($map['DetachedInstanceIds'])) {
                $model->detachedInstanceIds = $map['DetachedInstanceIds'];
            }
        }
        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }
        if (isset($map['KeyPairId'])) {
            $model->keyPairId = $map['KeyPairId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
