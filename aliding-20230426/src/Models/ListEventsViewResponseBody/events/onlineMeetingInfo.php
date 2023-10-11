<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsViewResponseBody\events;

use AlibabaCloud\Tea\Model;

class onlineMeetingInfo extends Model
{
    /**
     * @example 5c4df2xxx
     *
     * @var string
     */
    public $conferenceId;

    /**
     * @var mixed[]
     */
    public $extraInfo;

    /**
     * @example dingtalk
     *
     * @var string
     */
    public $type;

    /**
     * @example dingtalk://dingtalkclient/page/xxx?confId=xxx&calendarId=xxx
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'conferenceId' => 'ConferenceId',
        'extraInfo'    => 'ExtraInfo',
        'type'         => 'Type',
        'url'          => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conferenceId) {
            $res['ConferenceId'] = $this->conferenceId;
        }
        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return onlineMeetingInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConferenceId'])) {
            $model->conferenceId = $map['ConferenceId'];
        }
        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
