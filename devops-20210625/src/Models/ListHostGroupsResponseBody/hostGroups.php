<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListHostGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class hostGroups extends Model
{
    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $aliyunRegion;

    /**
     * @example 1586863220000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 2222222222222
     *
     * @var string
     */
    public $creatorAccountId;

    /**
     * @example 主机组
     *
     * @var string
     */
    public $description;

    /**
     * @example ecs
     *
     * @var string
     */
    public $ecsLabelKey;

    /**
     * @example value
     *
     * @var string
     */
    public $ecsLabelValue;

    /**
     * @example ECS_ALIYUN
     *
     * @var string
     */
    public $ecsType;

    /**
     * @example 3
     *
     * @var int
     */
    public $hostNum;

    /**
     * @description 323232
     *
     * @example 部署组Id
     *
     * @var int
     */
    public $id;

    /**
     * @example 211111111
     *
     * @var string
     */
    public $modifierAccountId;

    /**
     * @example 部署组
     *
     * @var string
     */
    public $name;

    /**
     * @example 1212122
     *
     * @var int
     */
    public $serviceConnectionId;

    /**
     * @example ECS
     *
     * @var string
     */
    public $type;

    /**
     * @example 1586863220000
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'aliyunRegion'        => 'aliyunRegion',
        'createTime'          => 'createTime',
        'creatorAccountId'    => 'creatorAccountId',
        'description'         => 'description',
        'ecsLabelKey'         => 'ecsLabelKey',
        'ecsLabelValue'       => 'ecsLabelValue',
        'ecsType'             => 'ecsType',
        'hostNum'             => 'hostNum',
        'id'                  => 'id',
        'modifierAccountId'   => 'modifierAccountId',
        'name'                => 'name',
        'serviceConnectionId' => 'serviceConnectionId',
        'type'                => 'type',
        'updateTime'          => 'updateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunRegion) {
            $res['aliyunRegion'] = $this->aliyunRegion;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->creatorAccountId) {
            $res['creatorAccountId'] = $this->creatorAccountId;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->ecsLabelKey) {
            $res['ecsLabelKey'] = $this->ecsLabelKey;
        }
        if (null !== $this->ecsLabelValue) {
            $res['ecsLabelValue'] = $this->ecsLabelValue;
        }
        if (null !== $this->ecsType) {
            $res['ecsType'] = $this->ecsType;
        }
        if (null !== $this->hostNum) {
            $res['hostNum'] = $this->hostNum;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->modifierAccountId) {
            $res['modifierAccountId'] = $this->modifierAccountId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->serviceConnectionId) {
            $res['serviceConnectionId'] = $this->serviceConnectionId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aliyunRegion'])) {
            $model->aliyunRegion = $map['aliyunRegion'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['creatorAccountId'])) {
            $model->creatorAccountId = $map['creatorAccountId'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['ecsLabelKey'])) {
            $model->ecsLabelKey = $map['ecsLabelKey'];
        }
        if (isset($map['ecsLabelValue'])) {
            $model->ecsLabelValue = $map['ecsLabelValue'];
        }
        if (isset($map['ecsType'])) {
            $model->ecsType = $map['ecsType'];
        }
        if (isset($map['hostNum'])) {
            $model->hostNum = $map['hostNum'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['modifierAccountId'])) {
            $model->modifierAccountId = $map['modifierAccountId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['serviceConnectionId'])) {
            $model->serviceConnectionId = $map['serviceConnectionId'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
