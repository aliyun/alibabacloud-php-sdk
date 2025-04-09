<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListChatbotInstancesResponseBody;

use AlibabaCloud\Dara\Model;

class bots extends Model
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
    public $timeZone;
    protected $_name = [
        'avatar' => 'Avatar',
        'createTime' => 'CreateTime',
        'instanceId' => 'InstanceId',
        'introduction' => 'Introduction',
        'languageCode' => 'LanguageCode',
        'name' => 'Name',
        'timeZone' => 'TimeZone',
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

        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
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

        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }

        return $model;
    }
}
