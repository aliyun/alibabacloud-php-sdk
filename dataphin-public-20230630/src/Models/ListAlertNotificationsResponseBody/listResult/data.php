<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertNotificationsResponseBody\listResult;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertNotificationsResponseBody\listResult\data\alertObject;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertNotificationsResponseBody\listResult\data\alertReason;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertNotificationsResponseBody\listResult\data\alertReceiver;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertNotificationsResponseBody\listResult\data\alertSend;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 12345
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertEventId) {
            $res['AlertEventId'] = $this->alertEventId;
        }
        if (null !== $this->alertObject) {
            $res['AlertObject'] = null !== $this->alertObject ? $this->alertObject->toMap() : null;
        }
        if (null !== $this->alertReason) {
            $res['AlertReason'] = null !== $this->alertReason ? $this->alertReason->toMap() : null;
        }
        if (null !== $this->alertReceiver) {
            $res['AlertReceiver'] = null !== $this->alertReceiver ? $this->alertReceiver->toMap() : null;
        }
        if (null !== $this->alertSend) {
            $res['AlertSend'] = null !== $this->alertSend ? $this->alertSend->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
