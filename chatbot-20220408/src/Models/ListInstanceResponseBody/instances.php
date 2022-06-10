<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ListInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description 机器人头像的URL
     *
     * @var string
     */
    public $avatar;

    /**
     * @description 机器人创建的 UTC 时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 机器人唯一标识
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 机器人备注
     *
     * @var string
     */
    public $introduction;

    /**
     * @description 机器人服务的语言
     *
     * @var string
     */
    public $languageCode;

    /**
     * @description 机器人名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 机器人类型
     *
     * @var string
     */
    public $robotType;
    protected $_name = [
        'avatar'       => 'Avatar',
        'createTime'   => 'CreateTime',
        'instanceId'   => 'InstanceId',
        'introduction' => 'Introduction',
        'languageCode' => 'LanguageCode',
        'name'         => 'Name',
        'robotType'    => 'RobotType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return instances
     */
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
