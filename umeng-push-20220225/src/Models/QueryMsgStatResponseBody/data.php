<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengpush\V20220225\Models\QueryMsgStatResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $accept;

    /**
     * @example 1
     *
     * @var int
     */
    public $arrive;

    /**
     * @example 0
     *
     * @var int
     */
    public $closePush;

    /**
     * @example 0
     *
     * @var int
     */
    public $dismiss;

    /**
     * @example ufe29y2167046828041801
     *
     * @var string
     */
    public $msgId;

    /**
     * @example 1
     *
     * @var int
     */
    public $open;

    /**
     * @example 1
     *
     * @var int
     */
    public $sent;

    /**
     * @example 2
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'accept'    => 'Accept',
        'arrive'    => 'Arrive',
        'closePush' => 'ClosePush',
        'dismiss'   => 'Dismiss',
        'msgId'     => 'MsgId',
        'open'      => 'Open',
        'sent'      => 'Sent',
        'status'    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accept) {
            $res['Accept'] = $this->accept;
        }
        if (null !== $this->arrive) {
            $res['Arrive'] = $this->arrive;
        }
        if (null !== $this->closePush) {
            $res['ClosePush'] = $this->closePush;
        }
        if (null !== $this->dismiss) {
            $res['Dismiss'] = $this->dismiss;
        }
        if (null !== $this->msgId) {
            $res['MsgId'] = $this->msgId;
        }
        if (null !== $this->open) {
            $res['Open'] = $this->open;
        }
        if (null !== $this->sent) {
            $res['Sent'] = $this->sent;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Accept'])) {
            $model->accept = $map['Accept'];
        }
        if (isset($map['Arrive'])) {
            $model->arrive = $map['Arrive'];
        }
        if (isset($map['ClosePush'])) {
            $model->closePush = $map['ClosePush'];
        }
        if (isset($map['Dismiss'])) {
            $model->dismiss = $map['Dismiss'];
        }
        if (isset($map['MsgId'])) {
            $model->msgId = $map['MsgId'];
        }
        if (isset($map['Open'])) {
            $model->open = $map['Open'];
        }
        if (isset($map['Sent'])) {
            $model->sent = $map['Sent'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
