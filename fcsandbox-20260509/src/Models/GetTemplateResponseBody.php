<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509\Models;

use AlibabaCloud\Dara\Model;

class GetTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupID;

    /**
     * @var PublicTemplateRuntimeConfig
     */
    public $runtimeConfig;

    /**
     * @var PublicTemplateStatus
     */
    public $status;

    /**
     * @var string
     */
    public $teamID;

    /**
     * @var string
     */
    public $teamName;

    /**
     * @var string
     */
    public $templateID;
    protected $_name = [
        'code' => 'code',
        'createdTime' => 'createdTime',
        'message' => 'message',
        'name' => 'name',
        'requestId' => 'requestId',
        'resourceGroupID' => 'resourceGroupID',
        'runtimeConfig' => 'runtimeConfig',
        'status' => 'status',
        'teamID' => 'teamID',
        'teamName' => 'teamName',
        'templateID' => 'templateID',
    ];

    public function validate()
    {
        if (null !== $this->runtimeConfig) {
            $this->runtimeConfig->validate();
        }
        if (null !== $this->status) {
            $this->status->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->resourceGroupID) {
            $res['resourceGroupID'] = $this->resourceGroupID;
        }

        if (null !== $this->runtimeConfig) {
            $res['runtimeConfig'] = null !== $this->runtimeConfig ? $this->runtimeConfig->toArray($noStream) : $this->runtimeConfig;
        }

        if (null !== $this->status) {
            $res['status'] = null !== $this->status ? $this->status->toArray($noStream) : $this->status;
        }

        if (null !== $this->teamID) {
            $res['teamID'] = $this->teamID;
        }

        if (null !== $this->teamName) {
            $res['teamName'] = $this->teamName;
        }

        if (null !== $this->templateID) {
            $res['templateID'] = $this->templateID;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['resourceGroupID'])) {
            $model->resourceGroupID = $map['resourceGroupID'];
        }

        if (isset($map['runtimeConfig'])) {
            $model->runtimeConfig = PublicTemplateRuntimeConfig::fromMap($map['runtimeConfig']);
        }

        if (isset($map['status'])) {
            $model->status = PublicTemplateStatus::fromMap($map['status']);
        }

        if (isset($map['teamID'])) {
            $model->teamID = $map['teamID'];
        }

        if (isset($map['teamName'])) {
            $model->teamName = $map['teamName'];
        }

        if (isset($map['templateID'])) {
            $model->templateID = $map['templateID'];
        }

        return $model;
    }
}
