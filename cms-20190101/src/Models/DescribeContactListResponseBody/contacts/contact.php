<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactListResponseBody\contacts;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactListResponseBody\contacts\contact\channels;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactListResponseBody\contacts\contact\channelsState;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactListResponseBody\contacts\contact\contactGroups;
use AlibabaCloud\Tea\Model;

class contact extends Model
{
    /**
     * @description The alert notification method.
     *
     * @var channels
     */
    public $channels;

    /**
     * @description The status of the alert notification method. Valid values: PENDING and OK.
     *
     * The email address must be activated after it is added as the value specified for the alert notification method. The value PENDING indicates that the email address is not activated. The value OK indicates that the email address is activated.
     * @var channelsState
     */
    public $channelsState;

    /**
     * @description None.
     *
     * @var contactGroups
     */
    public $contactGroups;

    /**
     * @description The timestamp when the alert contact was created.
     *
     * Unit: milliseconds.
     * @example 1552356159000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The description.
     *
     * @var string
     */
    public $desc;

    /**
     * @description The language in which the alert information is displayed. Valid values:
     *
     *   zh-cn: simplified Chinese
     *   en: English
     *
     * @example zh-cn
     *
     * @var string
     */
    public $lang;

    /**
     * @description The name of the alert contact.
     *
     * @example Alice
     *
     * @var string
     */
    public $name;

    /**
     * @description The timestamp when the alert contact was updated.
     *
     * Unit: milliseconds.
     * @example 1552356159000
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'channels'      => 'Channels',
        'channelsState' => 'ChannelsState',
        'contactGroups' => 'ContactGroups',
        'createTime'    => 'CreateTime',
        'desc'          => 'Desc',
        'lang'          => 'Lang',
        'name'          => 'Name',
        'updateTime'    => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channels) {
            $res['Channels'] = null !== $this->channels ? $this->channels->toMap() : null;
        }
        if (null !== $this->channelsState) {
            $res['ChannelsState'] = null !== $this->channelsState ? $this->channelsState->toMap() : null;
        }
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = null !== $this->contactGroups ? $this->contactGroups->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return contact
     */
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
