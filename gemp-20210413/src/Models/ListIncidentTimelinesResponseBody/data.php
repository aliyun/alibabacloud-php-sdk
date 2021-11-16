<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentTimelinesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 动态类型  触发新增 INCIDENT_ADD 响应 INCIDENT_RESPONSE 转交 INCIDENT_DELIVER 变更 INCIDENT_UPDATE 添加小计 INCIDENT_ADD_SUBTOTAL 完结 INCIDENT_FINISH 分配 INCIDENT_ASSIGN 升级 INCIDENT_UPGRAD
     *
     * @var string
     */
    public $action;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 描述
     *
     * @var int
     */
    public $description;

    /**
     * @description 事件Id
     *
     * @var int
     */
    public $incidentId;

    /**
     * @description 事件编号
     *
     * @var string
     */
    public $incidentNumber;

    /**
     * @description 事件标题
     *
     * @var string
     */
    public $incidentTitle;

    /**
     * @description 服务名称
     *
     * @var string
     */
    public $relatedServiceName;

    /**
     * @description 备注
     *
     * @var string
     */
    public $remark;

    /**
     * @description 动态快照数据
     *
     * @var string
     */
    public $snapshotData;

    /**
     * @description 动态
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'action'             => 'action',
        'createTime'         => 'createTime',
        'description'        => 'description',
        'incidentId'         => 'incidentId',
        'incidentNumber'     => 'incidentNumber',
        'incidentTitle'      => 'incidentTitle',
        'relatedServiceName' => 'relatedServiceName',
        'remark'             => 'remark',
        'snapshotData'       => 'snapshotData',
        'title'              => 'title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->incidentId) {
            $res['incidentId'] = $this->incidentId;
        }
        if (null !== $this->incidentNumber) {
            $res['incidentNumber'] = $this->incidentNumber;
        }
        if (null !== $this->incidentTitle) {
            $res['incidentTitle'] = $this->incidentTitle;
        }
        if (null !== $this->relatedServiceName) {
            $res['relatedServiceName'] = $this->relatedServiceName;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->snapshotData) {
            $res['snapshotData'] = $this->snapshotData;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['incidentId'])) {
            $model->incidentId = $map['incidentId'];
        }
        if (isset($map['incidentNumber'])) {
            $model->incidentNumber = $map['incidentNumber'];
        }
        if (isset($map['incidentTitle'])) {
            $model->incidentTitle = $map['incidentTitle'];
        }
        if (isset($map['relatedServiceName'])) {
            $model->relatedServiceName = $map['relatedServiceName'];
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }
        if (isset($map['snapshotData'])) {
            $model->snapshotData = $map['snapshotData'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
