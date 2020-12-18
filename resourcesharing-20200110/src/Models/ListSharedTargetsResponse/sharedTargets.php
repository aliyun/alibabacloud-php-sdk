<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListSharedTargetsResponse;

use AlibabaCloud\Tea\Model;

class sharedTargets extends Model
{
    /**
     * @var string
     */
    public $resourceShareId;

    /**
     * @var string
     */
    public $targetId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'resourceShareId' => 'ResourceShareId',
        'targetId'        => 'TargetId',
        'createTime'      => 'CreateTime',
        'updateTime'      => 'UpdateTime',
    ];

    public function validate()
    {
        Model::validateRequired('resourceShareId', $this->resourceShareId, true);
        Model::validateRequired('targetId', $this->targetId, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceShareId) {
            $res['ResourceShareId'] = $this->resourceShareId;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sharedTargets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceShareId'])) {
            $model->resourceShareId = $map['ResourceShareId'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
