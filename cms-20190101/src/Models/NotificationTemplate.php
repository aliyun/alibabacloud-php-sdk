<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;

class NotificationTemplate extends Model
{
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
    public $enContent;

    /**
     * @var string
     */
    public $enItemContent;

    /**
     * @var string
     */
    public $enTitle;

    /**
     * @var string
     */
    public $name;

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

    /**
     * @var string
     */
    public $wraperType;

    /**
     * @var string
     */
    public $zhContent;

    /**
     * @var string
     */
    public $zhItemContent;

    /**
     * @var string
     */
    public $zhTitle;
    protected $_name = [
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'enContent' => 'EnContent',
        'enItemContent' => 'EnItemContent',
        'enTitle' => 'EnTitle',
        'name' => 'Name',
        'type' => 'Type',
        'updateTime' => 'UpdateTime',
        'userId' => 'UserId',
        'uuid' => 'Uuid',
        'wraperType' => 'WraperType',
        'zhContent' => 'ZhContent',
        'zhItemContent' => 'ZhItemContent',
        'zhTitle' => 'ZhTitle',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enContent) {
            $res['EnContent'] = $this->enContent;
        }

        if (null !== $this->enItemContent) {
            $res['EnItemContent'] = $this->enItemContent;
        }

        if (null !== $this->enTitle) {
            $res['EnTitle'] = $this->enTitle;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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

        if (null !== $this->wraperType) {
            $res['WraperType'] = $this->wraperType;
        }

        if (null !== $this->zhContent) {
            $res['ZhContent'] = $this->zhContent;
        }

        if (null !== $this->zhItemContent) {
            $res['ZhItemContent'] = $this->zhItemContent;
        }

        if (null !== $this->zhTitle) {
            $res['ZhTitle'] = $this->zhTitle;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnContent'])) {
            $model->enContent = $map['EnContent'];
        }

        if (isset($map['EnItemContent'])) {
            $model->enItemContent = $map['EnItemContent'];
        }

        if (isset($map['EnTitle'])) {
            $model->enTitle = $map['EnTitle'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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

        if (isset($map['WraperType'])) {
            $model->wraperType = $map['WraperType'];
        }

        if (isset($map['ZhContent'])) {
            $model->zhContent = $map['ZhContent'];
        }

        if (isset($map['ZhItemContent'])) {
            $model->zhItemContent = $map['ZhItemContent'];
        }

        if (isset($map['ZhTitle'])) {
            $model->zhTitle = $map['ZhTitle'];
        }

        return $model;
    }
}
