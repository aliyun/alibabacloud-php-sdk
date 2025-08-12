<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\PushingTarget\httpRequestTarget;

class PushingTarget extends Model
{
    /**
     * @var string
     */
    public $arn;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var httpRequestTarget
     */
    public $httpRequestTarget;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $range;

    /**
     * @var string
     */
    public $templateUuid;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'arn' => 'Arn',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'httpRequestTarget' => 'HttpRequestTarget',
        'name' => 'Name',
        'range' => 'Range',
        'templateUuid' => 'TemplateUuid',
        'type' => 'Type',
        'updateTime' => 'UpdateTime',
        'userId' => 'UserId',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        if (null !== $this->httpRequestTarget) {
            $this->httpRequestTarget->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->httpRequestTarget) {
            $res['HttpRequestTarget'] = null !== $this->httpRequestTarget ? $this->httpRequestTarget->toArray($noStream) : $this->httpRequestTarget;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->range) {
            $res['Range'] = $this->range;
        }

        if (null !== $this->templateUuid) {
            $res['TemplateUuid'] = $this->templateUuid;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['HttpRequestTarget'])) {
            $model->httpRequestTarget = httpRequestTarget::fromMap($map['HttpRequestTarget']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Range'])) {
            $model->range = $map['Range'];
        }

        if (isset($map['TemplateUuid'])) {
            $model->templateUuid = $map['TemplateUuid'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
