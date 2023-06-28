<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class Trigger extends Model
{
    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var HTTPTrigger
     */
    public $httpTrigger;

    /**
     * @var string
     */
    public $invocationRole;

    /**
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @var string
     */
    public $qualifier;

    /**
     * @var string
     */
    public $sourceArn;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $targetArn;

    /**
     * @var string
     */
    public $triggerConfig;

    /**
     * @var string
     */
    public $triggerId;

    /**
     * @var string
     */
    public $triggerName;

    /**
     * @var string
     */
    public $triggerType;
    protected $_name = [
        'createdTime'      => 'createdTime',
        'description'      => 'description',
        'httpTrigger'      => 'httpTrigger',
        'invocationRole'   => 'invocationRole',
        'lastModifiedTime' => 'lastModifiedTime',
        'qualifier'        => 'qualifier',
        'sourceArn'        => 'sourceArn',
        'status'           => 'status',
        'targetArn'        => 'targetArn',
        'triggerConfig'    => 'triggerConfig',
        'triggerId'        => 'triggerId',
        'triggerName'      => 'triggerName',
        'triggerType'      => 'triggerType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->httpTrigger) {
            $res['httpTrigger'] = null !== $this->httpTrigger ? $this->httpTrigger->toMap() : null;
        }
        if (null !== $this->invocationRole) {
            $res['invocationRole'] = $this->invocationRole;
        }
        if (null !== $this->lastModifiedTime) {
            $res['lastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }
        if (null !== $this->sourceArn) {
            $res['sourceArn'] = $this->sourceArn;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->targetArn) {
            $res['targetArn'] = $this->targetArn;
        }
        if (null !== $this->triggerConfig) {
            $res['triggerConfig'] = $this->triggerConfig;
        }
        if (null !== $this->triggerId) {
            $res['triggerId'] = $this->triggerId;
        }
        if (null !== $this->triggerName) {
            $res['triggerName'] = $this->triggerName;
        }
        if (null !== $this->triggerType) {
            $res['triggerType'] = $this->triggerType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Trigger
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['httpTrigger'])) {
            $model->httpTrigger = HTTPTrigger::fromMap($map['httpTrigger']);
        }
        if (isset($map['invocationRole'])) {
            $model->invocationRole = $map['invocationRole'];
        }
        if (isset($map['lastModifiedTime'])) {
            $model->lastModifiedTime = $map['lastModifiedTime'];
        }
        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }
        if (isset($map['sourceArn'])) {
            $model->sourceArn = $map['sourceArn'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['targetArn'])) {
            $model->targetArn = $map['targetArn'];
        }
        if (isset($map['triggerConfig'])) {
            $model->triggerConfig = $map['triggerConfig'];
        }
        if (isset($map['triggerId'])) {
            $model->triggerId = $map['triggerId'];
        }
        if (isset($map['triggerName'])) {
            $model->triggerName = $map['triggerName'];
        }
        if (isset($map['triggerType'])) {
            $model->triggerType = $map['triggerType'];
        }

        return $model;
    }
}
