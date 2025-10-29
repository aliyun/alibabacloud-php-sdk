<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\PageQueryAgentListResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentName;

    /**
     * @var string
     */
    public $applicationCode;

    /**
     * @var string
     */
    public $auditReason;

    /**
     * @var string
     */
    public $buildFailReason;

    /**
     * @var string
     */
    public $businessTypeName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $lastOnlineTime;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var bool
     */
    public $withConfig;
    protected $_name = [
        'agentId' => 'AgentId',
        'agentName' => 'AgentName',
        'applicationCode' => 'ApplicationCode',
        'auditReason' => 'AuditReason',
        'buildFailReason' => 'BuildFailReason',
        'businessTypeName' => 'BusinessTypeName',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'lastOnlineTime' => 'LastOnlineTime',
        'modifyTime' => 'ModifyTime',
        'status' => 'Status',
        'withConfig' => 'WithConfig',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->applicationCode) {
            $res['ApplicationCode'] = $this->applicationCode;
        }

        if (null !== $this->auditReason) {
            $res['AuditReason'] = $this->auditReason;
        }

        if (null !== $this->buildFailReason) {
            $res['BuildFailReason'] = $this->buildFailReason;
        }

        if (null !== $this->businessTypeName) {
            $res['BusinessTypeName'] = $this->businessTypeName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->lastOnlineTime) {
            $res['LastOnlineTime'] = $this->lastOnlineTime;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->withConfig) {
            $res['WithConfig'] = $this->withConfig;
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['ApplicationCode'])) {
            $model->applicationCode = $map['ApplicationCode'];
        }

        if (isset($map['AuditReason'])) {
            $model->auditReason = $map['AuditReason'];
        }

        if (isset($map['BuildFailReason'])) {
            $model->buildFailReason = $map['BuildFailReason'];
        }

        if (isset($map['BusinessTypeName'])) {
            $model->businessTypeName = $map['BusinessTypeName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['LastOnlineTime'])) {
            $model->lastOnlineTime = $map['LastOnlineTime'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['WithConfig'])) {
            $model->withConfig = $map['WithConfig'];
        }

        return $model;
    }
}
