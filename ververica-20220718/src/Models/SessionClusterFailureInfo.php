<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class SessionClusterFailureInfo extends Model
{
    /**
     * @var int
     */
    public $failedAt;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $reason;
    protected $_name = [
        'failedAt' => 'failedAt',
        'message' => 'message',
        'reason' => 'reason',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedAt) {
            $res['failedAt'] = $this->failedAt;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
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
        if (isset($map['failedAt'])) {
            $model->failedAt = $map['failedAt'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
        }

        return $model;
    }
}
