<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ListInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class instances extends Model
{
    /**
     * @var string
     */
    public $avatar;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $introduction;

    /**
     * @var string
     */
    public $languageCode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $robotType;
    protected $_name = [
        'avatar' => 'Avatar',
        'createTime' => 'CreateTime',
        'instanceId' => 'InstanceId',
        'introduction' => 'Introduction',
        'languageCode' => 'LanguageCode',
        'name' => 'Name',
        'robotType' => 'RobotType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avatar) {
            $res['Avatar'] = $this->avatar;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->introduction) {
            $res['Introduction'] = $this->introduction;
        }

        if (null !== $this->languageCode) {
            $res['LanguageCode'] = $this->languageCode;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->robotType) {
            $res['RobotType'] = $this->robotType;
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
        if (isset($map['Avatar'])) {
            $model->avatar = $map['Avatar'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Introduction'])) {
            $model->introduction = $map['Introduction'];
        }

        if (isset($map['LanguageCode'])) {
            $model->languageCode = $map['LanguageCode'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RobotType'])) {
            $model->robotType = $map['RobotType'];
        }

        return $model;
    }
}
