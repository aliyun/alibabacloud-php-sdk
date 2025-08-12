<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactListResponseBody\contacts;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactListResponseBody\contacts\contact\channels;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactListResponseBody\contacts\contact\channelsState;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactListResponseBody\contacts\contact\contactGroups;

class contact extends Model
{
    /**
     * @var channels
     */
    public $channels;

    /**
     * @var channelsState
     */
    public $channelsState;

    /**
     * @var contactGroups
     */
    public $contactGroups;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'channels' => 'Channels',
        'channelsState' => 'ChannelsState',
        'contactGroups' => 'ContactGroups',
        'createTime' => 'CreateTime',
        'desc' => 'Desc',
        'lang' => 'Lang',
        'name' => 'Name',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (null !== $this->channels) {
            $this->channels->validate();
        }
        if (null !== $this->channelsState) {
            $this->channelsState->validate();
        }
        if (null !== $this->contactGroups) {
            $this->contactGroups->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channels) {
            $res['Channels'] = null !== $this->channels ? $this->channels->toArray($noStream) : $this->channels;
        }

        if (null !== $this->channelsState) {
            $res['ChannelsState'] = null !== $this->channelsState ? $this->channelsState->toArray($noStream) : $this->channelsState;
        }

        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = null !== $this->contactGroups ? $this->contactGroups->toArray($noStream) : $this->contactGroups;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['Channels'])) {
            $model->channels = channels::fromMap($map['Channels']);
        }

        if (isset($map['ChannelsState'])) {
            $model->channelsState = channelsState::fromMap($map['ChannelsState']);
        }

        if (isset($map['ContactGroups'])) {
            $model->contactGroups = contactGroups::fromMap($map['ContactGroups']);
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
