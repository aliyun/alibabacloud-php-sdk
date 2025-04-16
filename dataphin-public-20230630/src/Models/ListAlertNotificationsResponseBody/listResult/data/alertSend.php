<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertNotificationsResponseBody\listResult\data;

use AlibabaCloud\Dara\Model;

class alertSend extends Model
{
    /**
     * @var string
     */
    public $failReason;

    /**
     * @var string
     */
    public $sendContent;

    /**
     * @var string
     */
    public $sendTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'failReason' => 'FailReason',
        'sendContent' => 'SendContent',
        'sendTime' => 'SendTime',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failReason) {
            $res['FailReason'] = $this->failReason;
        }

        if (null !== $this->sendContent) {
            $res['SendContent'] = $this->sendContent;
        }

        if (null !== $this->sendTime) {
            $res['SendTime'] = $this->sendTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['FailReason'])) {
            $model->failReason = $map['FailReason'];
        }

        if (isset($map['SendContent'])) {
            $model->sendContent = $map['SendContent'];
        }

        if (isset($map['SendTime'])) {
            $model->sendTime = $map['SendTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
