<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

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
     * @example Alarm $.alertName
     *
     * @var string
     */
    public $enContent;

    /**
     * @example Alarm $.alertName
     *
     * @var string
     */
    public $enItemContent;

    /**
     * @example Alarm $.alertName
     *
     * @var string
     */
    public $enTitle;

    /**
     * @var string
     */
    public $name;

    /**
     * @example DATA,  SMS,  ONCALL,  MAIL,  DING,  WEIXIN,  FEISHU,  SLACK
     *
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
     * @example TEXT, MARKDOWN,CARD
     *
     * @var string
     */
    public $wraperType;

    /**
     * @example 报警 $.alertName
     *
     * @var string
     */
    public $zhContent;

    /**
     * @example 报警 $.alertName
     *
     * @var string
     */
    public $zhItemContent;

    /**
     * @example 报警通知 $.alertName
     *
     * @var string
     */
    public $zhTitle;
    protected $_name = [
        'createTime'    => 'CreateTime',
        'description'   => 'Description',
        'enContent'     => 'EnContent',
        'enItemContent' => 'EnItemContent',
        'enTitle'       => 'EnTitle',
        'name'          => 'Name',
        'type'          => 'Type',
        'updateTime'    => 'UpdateTime',
        'userId'        => 'UserId',
        'uuid'          => 'Uuid',
        'wraperType'    => 'WraperType',
        'zhContent'     => 'ZhContent',
        'zhItemContent' => 'ZhItemContent',
        'zhTitle'       => 'ZhTitle',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return NotificationTemplate
     */
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
