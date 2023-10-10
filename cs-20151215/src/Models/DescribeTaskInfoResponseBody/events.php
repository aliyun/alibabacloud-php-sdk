<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeTaskInfoResponseBody;

use AlibabaCloud\Tea\Model;

class events extends Model
{
    /**
     * @description The action of the event.
     *
     * @example start
     *
     * @var string
     */
    public $action;

    /**
     * @description The severity level of the event.
     *
     * @example Normal
     *
     * @var string
     */
    public $level;

    /**
     * @description The message about the event.
     *
     * @example start to xxx
     *
     * @var string
     */
    public $message;

    /**
     * @description The cause of the event.
     *
     * @example NodePoolUpgradeStart
     *
     * @var string
     */
    public $reason;

    /**
     * @description The source of the event.
     *
     * @example ACK
     *
     * @var string
     */
    public $source;

    /**
     * @description The timestamp when the event was generated.
     *
     * @example 1669706229286
     *
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'action'    => 'action',
        'level'     => 'level',
        'message'   => 'message',
        'reason'    => 'reason',
        'source'    => 'source',
        'timestamp' => 'timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }
        if (null !== $this->level) {
            $res['level'] = $this->level;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return events
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }
        if (isset($map['level'])) {
            $model->level = $map['level'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        return $model;
    }
}
