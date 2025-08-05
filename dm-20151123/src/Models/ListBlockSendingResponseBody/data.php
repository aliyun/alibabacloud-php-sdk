<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\ListBlockSendingResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $blockEmail;

    /**
     * @var int
     */
    public $blockTime;

    /**
     * @var int
     */
    public $reason;

    /**
     * @var int
     */
    public $sendTime;

    /**
     * @var string
     */
    public $senderEmail;
    protected $_name = [
        'blockEmail' => 'BlockEmail',
        'blockTime' => 'BlockTime',
        'reason' => 'Reason',
        'sendTime' => 'SendTime',
        'senderEmail' => 'SenderEmail',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blockEmail) {
            $res['BlockEmail'] = $this->blockEmail;
        }

        if (null !== $this->blockTime) {
            $res['BlockTime'] = $this->blockTime;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->sendTime) {
            $res['SendTime'] = $this->sendTime;
        }

        if (null !== $this->senderEmail) {
            $res['SenderEmail'] = $this->senderEmail;
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
        if (isset($map['BlockEmail'])) {
            $model->blockEmail = $map['BlockEmail'];
        }

        if (isset($map['BlockTime'])) {
            $model->blockTime = $map['BlockTime'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['SendTime'])) {
            $model->sendTime = $map['SendTime'];
        }

        if (isset($map['SenderEmail'])) {
            $model->senderEmail = $map['SenderEmail'];
        }

        return $model;
    }
}
