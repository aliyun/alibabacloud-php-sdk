<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeInstanceResponseBody\categories;
use AlibabaCloud\Tea\Model;

class DescribeInstanceResponseBody extends Model
{
    /**
     * @description 机器人头像的URL
     *
     * @var string
     */
    public $avatar;

    /**
     * @description 类目列表
     *
     * @var categories[]
     */
    public $categories;

    /**
     * @description 机器人创建的 UTC 时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 机器人状态： EDITING(编辑中)、 PUBLISHED(已发布)
     *
     * @var string
     */
    public $editStatus;

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
     * @description 机器人服务的语言，如zh-cn、en-us
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
     * @description 请求Id
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 机器人类型
     *
     * @var string
     */
    public $robotType;

    /**
     * @description 机器人的时区，参考《公共-时区码》
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
