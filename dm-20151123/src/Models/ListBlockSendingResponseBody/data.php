<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\ListBlockSendingResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example xxxx@rcpt.com
     *
     * @var string
     */
    public $blockEmail;

    /**
     * @example 1723259364
     *
     * @var int
     */
    public $blockTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $reason;

    /**
     * @example 1723249364
     *
     * @var int
     */
    public $sendTime;

    /**
     * @example xxxx@sender.com
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
