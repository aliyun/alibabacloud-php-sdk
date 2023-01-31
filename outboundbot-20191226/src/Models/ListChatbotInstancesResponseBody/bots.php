<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListChatbotInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class bots extends Model
{
    /**
     * @example https://ccrm.wengine.cn/ccrm/system/common/fileDownload/noToken?fileId=975cdeaa064846e3b6004abd9ba1d7c8
     *
     * @var string
     */
    public $avatar;

    /**
     * @example 2022-01-18T02:36:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example e874fcf0-d2f4-4e62-9377-b6f35fe55210
     *
     * @var string
     */
    public $instanceId;

    /**
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
     * @var string
     */
    public $name;

    /**
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'avatar'       => 'Avatar',
        'createTime'   => 'CreateTime',
        'instanceId'   => 'InstanceId',
        'introduction' => 'Introduction',
        'languageCode' => 'LanguageCode',
        'name'         => 'Name',
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
        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bots
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
        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }

        return $model;
    }
}
