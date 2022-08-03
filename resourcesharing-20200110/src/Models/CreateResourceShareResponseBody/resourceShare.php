<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models\CreateResourceShareResponseBody;

use AlibabaCloud\Tea\Model;

class resourceShare extends Model
{
    /**
     * @var bool
     */
    public $allowExternalTargets;

    /**
     * @var string
     */
    public $createTime;

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
    public $updateTime;
    protected $_name = [
        'allowExternalTargets' => 'AllowExternalTargets',
        'createTime'           => 'CreateTime',
        'resourceShareId'      => 'ResourceShareId',
        'resourceShareName'    => 'ResourceShareName',
        'resourceShareOwner'   => 'ResourceShareOwner',
        'resourceShareStatus'  => 'ResourceShareStatus',
        'updateTime'           => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowExternalTargets) {
            $res['AllowExternalTargets'] = $this->allowExternalTargets;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
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
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceShare
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowExternalTargets'])) {
            $model->allowExternalTargets = $map['AllowExternalTargets'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
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
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
