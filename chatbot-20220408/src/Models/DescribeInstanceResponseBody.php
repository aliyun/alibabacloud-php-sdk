<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeInstanceResponseBody\categories;
use AlibabaCloud\Tea\Model;

class DescribeInstanceResponseBody extends Model
{
    /**
     * @example /alimefe/meebot/robot/0.0.5/img/xxx-90-97.png
     *
     * @var string
     */
    public $avatar;

    /**
     * @var categories[]
     */
    public $categories;

    /**
     * @example 2021-08-12T16:00:01Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example PUBLISHED
     *
     * @var string
     */
    public $editStatus;

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
     * @example 907AA5F2-0521-49AB-80AB-1ADEFAB2B901
     *
     * @var string
     */
    public $requestId;

    /**
     * @example scenario_im
     *
     * @var string
     */
    public $robotType;

    /**
     * @example Asia/Chongqing
     *
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'avatar'       => 'Avatar',
        'categories'   => 'Categories',
        'createTime'   => 'CreateTime',
        'editStatus'   => 'EditStatus',
        'instanceId'   => 'InstanceId',
        'introduction' => 'Introduction',
        'languageCode' => 'LanguageCode',
        'name'         => 'Name',
        'requestId'    => 'RequestId',
        'robotType'    => 'RobotType',
        'timeZone'     => 'TimeZone',
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
        if (null !== $this->categories) {
            $res['Categories'] = [];
            if (null !== $this->categories && \is_array($this->categories)) {
                $n = 0;
                foreach ($this->categories as $item) {
                    $res['Categories'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->editStatus) {
            $res['EditStatus'] = $this->editStatus;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->robotType) {
            $res['RobotType'] = $this->robotType;
        }
        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Avatar'])) {
            $model->avatar = $map['Avatar'];
        }
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = [];
                $n                 = 0;
                foreach ($map['Categories'] as $item) {
                    $model->categories[$n++] = null !== $item ? categories::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EditStatus'])) {
            $model->editStatus = $map['EditStatus'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RobotType'])) {
            $model->robotType = $map['RobotType'];
        }
        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }

        return $model;
    }
}
