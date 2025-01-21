<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class GrafanaWorkspaceDashboardReport extends Model
{
    /**
     * @var int
     */
    public $gmtCreate;
    /**
     * @var string
     */
    public $grafanaWorkspaceId;
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $lastSendTime;
    /**
     * @var string
     */
    public $msg;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $reportChannelTarget;
    /**
     * @var string
     */
    public $reportChannelType;
    /**
     * @var string
     */
    public $reportStyle;
    /**
     * @var string
     */
    public $reportType;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $triggerDay;
    /**
     * @var string
     */
    public $triggerTime;
    /**
     * @var string
     */
    public $triggerType;
    /**
     * @var string
     */
    public $url;
    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'gmtCreate'           => 'gmtCreate',
        'grafanaWorkspaceId'  => 'grafanaWorkspaceId',
        'id'                  => 'id',
        'lastSendTime'        => 'lastSendTime',
        'msg'                 => 'msg',
        'name'                => 'name',
        'reportChannelTarget' => 'reportChannelTarget',
        'reportChannelType'   => 'reportChannelType',
        'reportStyle'         => 'reportStyle',
        'reportType'          => 'reportType',
        'status'              => 'status',
        'triggerDay'          => 'triggerDay',
        'triggerTime'         => 'triggerTime',
        'triggerType'         => 'triggerType',
        'url'                 => 'url',
        'userId'              => 'userId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->grafanaWorkspaceId) {
            $res['grafanaWorkspaceId'] = $this->grafanaWorkspaceId;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->lastSendTime) {
            $res['lastSendTime'] = $this->lastSendTime;
        }

        if (null !== $this->msg) {
            $res['msg'] = $this->msg;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->reportChannelTarget) {
            $res['reportChannelTarget'] = $this->reportChannelTarget;
        }

        if (null !== $this->reportChannelType) {
            $res['reportChannelType'] = $this->reportChannelType;
        }

        if (null !== $this->reportStyle) {
            $res['reportStyle'] = $this->reportStyle;
        }

        if (null !== $this->reportType) {
            $res['reportType'] = $this->reportType;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->triggerDay) {
            $res['triggerDay'] = $this->triggerDay;
        }

        if (null !== $this->triggerTime) {
            $res['triggerTime'] = $this->triggerTime;
        }

        if (null !== $this->triggerType) {
            $res['triggerType'] = $this->triggerType;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['grafanaWorkspaceId'])) {
            $model->grafanaWorkspaceId = $map['grafanaWorkspaceId'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['lastSendTime'])) {
            $model->lastSendTime = $map['lastSendTime'];
        }

        if (isset($map['msg'])) {
            $model->msg = $map['msg'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['reportChannelTarget'])) {
            $model->reportChannelTarget = $map['reportChannelTarget'];
        }

        if (isset($map['reportChannelType'])) {
            $model->reportChannelType = $map['reportChannelType'];
        }

        if (isset($map['reportStyle'])) {
            $model->reportStyle = $map['reportStyle'];
        }

        if (isset($map['reportType'])) {
            $model->reportType = $map['reportType'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['triggerDay'])) {
            $model->triggerDay = $map['triggerDay'];
        }

        if (isset($map['triggerTime'])) {
            $model->triggerTime = $map['triggerTime'];
        }

        if (isset($map['triggerType'])) {
            $model->triggerType = $map['triggerType'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
