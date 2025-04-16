<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertNotificationsResponseBody\listResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertNotificationsResponseBody\listResult\data\alertObject;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertNotificationsResponseBody\listResult\data\alertReason;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertNotificationsResponseBody\listResult\data\alertReceiver;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertNotificationsResponseBody\listResult\data\alertSend;

class data extends Model
{
    /**
     * @var string
     */
    public $alertEventId;

    /**
     * @var alertObject
     */
    public $alertObject;

    /**
     * @var alertReason
     */
    public $alertReason;

    /**
     * @var alertReceiver
     */
    public $alertReceiver;

    /**
     * @var alertSend
     */
    public $alertSend;
    protected $_name = [
        'alertEventId' => 'AlertEventId',
        'alertObject' => 'AlertObject',
        'alertReason' => 'AlertReason',
        'alertReceiver' => 'AlertReceiver',
        'alertSend' => 'AlertSend',
    ];

    public function validate()
    {
        if (null !== $this->alertObject) {
            $this->alertObject->validate();
        }
        if (null !== $this->alertReason) {
            $this->alertReason->validate();
        }
        if (null !== $this->alertReceiver) {
            $this->alertReceiver->validate();
        }
        if (null !== $this->alertSend) {
            $this->alertSend->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertEventId) {
            $res['AlertEventId'] = $this->alertEventId;
        }

        if (null !== $this->alertObject) {
            $res['AlertObject'] = null !== $this->alertObject ? $this->alertObject->toArray($noStream) : $this->alertObject;
        }

        if (null !== $this->alertReason) {
            $res['AlertReason'] = null !== $this->alertReason ? $this->alertReason->toArray($noStream) : $this->alertReason;
        }

        if (null !== $this->alertReceiver) {
            $res['AlertReceiver'] = null !== $this->alertReceiver ? $this->alertReceiver->toArray($noStream) : $this->alertReceiver;
        }

        if (null !== $this->alertSend) {
            $res['AlertSend'] = null !== $this->alertSend ? $this->alertSend->toArray($noStream) : $this->alertSend;
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
        if (isset($map['AlertEventId'])) {
            $model->alertEventId = $map['AlertEventId'];
        }

        if (isset($map['AlertObject'])) {
            $model->alertObject = alertObject::fromMap($map['AlertObject']);
        }

        if (isset($map['AlertReason'])) {
            $model->alertReason = alertReason::fromMap($map['AlertReason']);
        }

        if (isset($map['AlertReceiver'])) {
            $model->alertReceiver = alertReceiver::fromMap($map['AlertReceiver']);
        }

        if (isset($map['AlertSend'])) {
            $model->alertSend = alertSend::fromMap($map['AlertSend']);
        }

        return $model;
    }
}
