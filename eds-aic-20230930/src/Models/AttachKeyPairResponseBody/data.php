<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\AttachKeyPairResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The IDs of the cloud phone instances to which the ADB key pair is successfully attached.
     *
     * @var string[]
     */
    public $attachedInstanceIds;

    /**
     * @description The number of the cloud phone instances to which the ADB key pair failed to be attached.
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
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'attachedInstanceIds' => 'AttachedInstanceIds',
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
        if (null !== $this->attachedInstanceIds) {
            $res['AttachedInstanceIds'] = $this->attachedInstanceIds;
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
        if (isset($map['AttachedInstanceIds'])) {
            if (!empty($map['AttachedInstanceIds'])) {
                $model->attachedInstanceIds = $map['AttachedInstanceIds'];
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
