<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceSharesResponse;

use AlibabaCloud\Tea\Model;

class resourceShares extends Model
{
    /**
     * @var string
     */
    public $resourceShareId;

    /**
     * @var string
     */
    public $resourceShareName;

    /**
     * @var string
     */
    public $resourceShareOwner;

    /**
     * @var string
     */
    public $resourceShareStatus;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'resourceShareId'     => 'ResourceShareId',
        'resourceShareName'   => 'ResourceShareName',
        'resourceShareOwner'  => 'ResourceShareOwner',
        'resourceShareStatus' => 'ResourceShareStatus',
        'createTime'          => 'CreateTime',
        'updateTime'          => 'UpdateTime',
    ];

    public function validate()
    {
        Model::validateRequired('resourceShareId', $this->resourceShareId, true);
        Model::validateRequired('resourceShareName', $this->resourceShareName, true);
        Model::validateRequired('resourceShareOwner', $this->resourceShareOwner, true);
        Model::validateRequired('resourceShareStatus', $this->resourceShareStatus, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceShareId) {
            $res['ResourceShareId'] = $this->resourceShareId;
        }
        if (null !== $this->resourceShareName) {
            $res['ResourceShareName'] = $this->resourceShareName;
        }
        if (null !== $this->resourceShareOwner) {
            $res['ResourceShareOwner'] = $this->resourceShareOwner;
        }
        if (null !== $this->resourceShareStatus) {
            $res['ResourceShareStatus'] = $this->resourceShareStatus;
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
     * @return resourceShares
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceShareId'])) {
            $model->resourceShareId = $map['ResourceShareId'];
        }
        if (isset($map['ResourceShareName'])) {
            $model->resourceShareName = $map['ResourceShareName'];
        }
        if (isset($map['ResourceShareOwner'])) {
            $model->resourceShareOwner = $map['ResourceShareOwner'];
        }
        if (isset($map['ResourceShareStatus'])) {
            $model->resourceShareStatus = $map['ResourceShareStatus'];
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
