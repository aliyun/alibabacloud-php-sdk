<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListHostGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class hostGroups extends Model
{
    /**
     * @description 创建人阿里云账号id
     *
     * @var string
     */
    public $creatorAccountId;

    /**
     * @description 更新时间
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description 主机个数
     *
     * @var int
     */
    public $hostNum;

    /**
     * @description 修改人阿里云账号id
     *
     * @var string
     */
    public $modifierAccountId;

    /**
     * @description 描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 类型
     *
     * @var string
     */
    public $type;

    /**
     * @description 主机时间
     *
     * @var int
     */
    public $createTime;

    /**
     * @description 主机类型
     *
     * @var string
     */
    public $ecsType;

    /**
     * @description 阿里云区域
     *
     * @var string
     */
    public $aliyunRegion;

    /**
     * @description ecs标签Key
     *
     * @var string
     */
    public $ecsLabelKey;

    /**
     * @description 部署组名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 323232
     *
     * @var int
     */
    public $id;

    /**
     * @description 服务连接Id
     *
     * @var int
     */
    public $serviceConnectionId;

    /**
     * @description Ecs标签值
     *
     * @var string
     */
    public $ecsLabelValue;
    protected $_name = [
        'creatorAccountId'    => 'creatorAccountId',
        'updateTime'          => 'updateTime',
        'hostNum'             => 'hostNum',
        'modifierAccountId'   => 'modifierAccountId',
        'description'         => 'description',
        'type'                => 'type',
        'createTime'          => 'createTime',
        'ecsType'             => 'ecsType',
        'aliyunRegion'        => 'aliyunRegion',
        'ecsLabelKey'         => 'ecsLabelKey',
        'name'                => 'name',
        'id'                  => 'id',
        'serviceConnectionId' => 'serviceConnectionId',
        'ecsLabelValue'       => 'ecsLabelValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creatorAccountId) {
            $res['creatorAccountId'] = $this->creatorAccountId;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }
        if (null !== $this->hostNum) {
            $res['hostNum'] = $this->hostNum;
        }
        if (null !== $this->modifierAccountId) {
            $res['modifierAccountId'] = $this->modifierAccountId;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->ecsType) {
            $res['ecsType'] = $this->ecsType;
        }
        if (null !== $this->aliyunRegion) {
            $res['aliyunRegion'] = $this->aliyunRegion;
        }
        if (null !== $this->ecsLabelKey) {
            $res['ecsLabelKey'] = $this->ecsLabelKey;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->serviceConnectionId) {
            $res['serviceConnectionId'] = $this->serviceConnectionId;
        }
        if (null !== $this->ecsLabelValue) {
            $res['ecsLabelValue'] = $this->ecsLabelValue;
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
        if (isset($map['creatorAccountId'])) {
            $model->creatorAccountId = $map['creatorAccountId'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }
        if (isset($map['hostNum'])) {
            $model->hostNum = $map['hostNum'];
        }
        if (isset($map['modifierAccountId'])) {
            $model->modifierAccountId = $map['modifierAccountId'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['ecsType'])) {
            $model->ecsType = $map['ecsType'];
        }
        if (isset($map['aliyunRegion'])) {
            $model->aliyunRegion = $map['aliyunRegion'];
        }
        if (isset($map['ecsLabelKey'])) {
            $model->ecsLabelKey = $map['ecsLabelKey'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['serviceConnectionId'])) {
            $model->serviceConnectionId = $map['serviceConnectionId'];
        }
        if (isset($map['ecsLabelValue'])) {
            $model->ecsLabelValue = $map['ecsLabelValue'];
        }

        return $model;
    }
}
