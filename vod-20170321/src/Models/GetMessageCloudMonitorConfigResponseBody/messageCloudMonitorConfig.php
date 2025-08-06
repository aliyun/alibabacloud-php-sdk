<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMessageCloudMonitorConfigResponseBody;

use AlibabaCloud\Dara\Model;

class messageCloudMonitorConfig extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $eventTypeList;
    protected $_name = [
        'appId' => 'AppId',
        'eventTypeList' => 'EventTypeList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->eventTypeList) {
            $res['EventTypeList'] = $this->eventTypeList;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['EventTypeList'])) {
            $model->eventTypeList = $map['EventTypeList'];
        }

        return $model;
    }
}
