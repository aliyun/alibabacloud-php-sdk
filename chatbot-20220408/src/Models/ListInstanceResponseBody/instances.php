<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ListInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @example /alimefe/meebot/robot/0.0.5/img/xxx-90-97.png
     *
     * @var string
     */
    public $avatar;

    /**
     * @example 2021-08-12T16:00:01Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example chatbot-cn-mp90s2lrk00050
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 用于C端问答的机器人
     *
     * @var string
     */
    public $introduction;

    /**
     * @example zh-cn
     *
     * @var string
     */
    public $languageCode;

    /**
     * @example 智能客服-小C
     *
     * @var string
     */
    public $name;

    /**
     * @example scenario_im
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
