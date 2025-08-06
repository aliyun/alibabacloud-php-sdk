<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetStorageNotifyConfigResponseBody;

use AlibabaCloud\Dara\Model;

class ossNotifyConfig extends Model
{
    /**
     * @var string
     */
    public $eventList;

    /**
     * @var string
     */
    public $httpProcessAddress;

    /**
     * @var string
     */
    public $notifyName;

    /**
     * @var string
     */
    public $resourcePrefixName;
    protected $_name = [
        'eventList' => 'EventList',
        'httpProcessAddress' => 'HttpProcessAddress',
        'notifyName' => 'NotifyName',
        'resourcePrefixName' => 'ResourcePrefixName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventList) {
            $res['EventList'] = $this->eventList;
        }

        if (null !== $this->httpProcessAddress) {
            $res['HttpProcessAddress'] = $this->httpProcessAddress;
        }

        if (null !== $this->notifyName) {
            $res['NotifyName'] = $this->notifyName;
        }

        if (null !== $this->resourcePrefixName) {
            $res['ResourcePrefixName'] = $this->resourcePrefixName;
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
        if (isset($map['EventList'])) {
            $model->eventList = $map['EventList'];
        }

        if (isset($map['HttpProcessAddress'])) {
            $model->httpProcessAddress = $map['HttpProcessAddress'];
        }

        if (isset($map['NotifyName'])) {
            $model->notifyName = $map['NotifyName'];
        }

        if (isset($map['ResourcePrefixName'])) {
            $model->resourcePrefixName = $map['ResourcePrefixName'];
        }

        return $model;
    }
}
