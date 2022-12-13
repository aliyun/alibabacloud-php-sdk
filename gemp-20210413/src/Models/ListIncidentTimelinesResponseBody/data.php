<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListIncidentTimelinesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example INCIDENT_ADD
     *
     * @var string
     */
    public $action;

    /**
     * @example 2021-06-23 00:00:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $description;

    /**
     * @example 3321
     *
     * @var int
     */
    public $incidentId;

    /**
     * @example I13002001
     *
     * @var string
     */
    public $incidentNumber;

    /**
     * @var string
     */
    public $incidentTitle;

    /**
     * @var int
     */
    public $relRouteRuleDeleteType;

    /**
     * @var string
     */
    public $relatedServiceName;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $snapshotData;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'action'                 => 'action',
        'createTime'             => 'createTime',
        'description'            => 'description',
        'incidentId'             => 'incidentId',
        'incidentNumber'         => 'incidentNumber',
        'incidentTitle'          => 'incidentTitle',
        'relRouteRuleDeleteType' => 'relRouteRuleDeleteType',
        'relatedServiceName'     => 'relatedServiceName',
        'remark'                 => 'remark',
        'snapshotData'           => 'snapshotData',
        'title'                  => 'title',
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
        if (null !== $this->relRouteRuleDeleteType) {
            $res['relRouteRuleDeleteType'] = $this->relRouteRuleDeleteType;
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
        if (isset($map['relRouteRuleDeleteType'])) {
            $model->relRouteRuleDeleteType = $map['relRouteRuleDeleteType'];
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
