<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class HotUpdateJobFailureInfo extends Model
{
    /**
     * @var string
     */
    public $failureSeverity;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $reason;
    protected $_name = [
        'failureSeverity' => 'failureSeverity',
        'message'         => 'message',
        'reason'          => 'reason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failureSeverity) {
            $res['failureSeverity'] = $this->failureSeverity;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HotUpdateJobFailureInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['failureSeverity'])) {
            $model->failureSeverity = $map['failureSeverity'];
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
