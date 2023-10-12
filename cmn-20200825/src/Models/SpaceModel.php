<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\SpaceModel\sort;
use AlibabaCloud\Tea\Model;

class SpaceModel extends Model
{
    /**
     * @example 2020-02-01
     *
     * @var string
     */
    public $createTime;

    /**
     * @example {}
     *
     * @var string
     */
    public $instance;

    /**
     * @example CMDB
     *
     * @var string
     */
    public $operateType;

    /**
     * @var sort
     */
    public $sort;

    /**
     * @example spaceIdxxxyyy
     *
     * @var string
     */
    public $spaceId;

    /**
     * @var \AlibabaCloud\SDK\Cmn\V20200825\Models\SpaceModel\spaceModel
     */
    public $spaceModel;

    /**
     * @example spaceModelIdsdad
     *
     * @var string
     */
    public $spaceModelId;

    /**
     * @example 2020-02-01
     *
     * @var string
     */
    public $spaceModelName;

    /**
     * @example 园区
     *
     * @var string
     */
    public $spaceType;

    /**
     * @example USE
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'instance'       => 'Instance',
        'operateType'    => 'OperateType',
        'sort'           => 'Sort',
        'spaceId'        => 'SpaceId',
        'spaceModel'     => 'SpaceModel',
        'spaceModelId'   => 'SpaceModelId',
        'spaceModelName' => 'SpaceModelName',
        'spaceType'      => 'SpaceType',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->instance) {
            $res['Instance'] = $this->instance;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }
        if (null !== $this->sort) {
            $res['Sort'] = null !== $this->sort ? $this->sort->toMap() : null;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->spaceModel) {
            $res['SpaceModel'] = null !== $this->spaceModel ? $this->spaceModel->toMap() : null;
        }
        if (null !== $this->spaceModelId) {
            $res['SpaceModelId'] = $this->spaceModelId;
        }
        if (null !== $this->spaceModelName) {
            $res['SpaceModelName'] = $this->spaceModelName;
        }
        if (null !== $this->spaceType) {
            $res['SpaceType'] = $this->spaceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SpaceModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Instance'])) {
            $model->instance = $map['Instance'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }
        if (isset($map['Sort'])) {
            $model->sort = sort::fromMap($map['Sort']);
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['SpaceModel'])) {
            $model->spaceModel = \AlibabaCloud\SDK\Cmn\V20200825\Models\SpaceModel\spaceModel::fromMap($map['SpaceModel']);
        }
        if (isset($map['SpaceModelId'])) {
            $model->spaceModelId = $map['SpaceModelId'];
        }
        if (isset($map['SpaceModelName'])) {
            $model->spaceModelName = $map['SpaceModelName'];
        }
        if (isset($map['SpaceType'])) {
            $model->spaceType = $map['SpaceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
