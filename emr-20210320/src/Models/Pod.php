<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class Pod extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $podName;

    /**
     * @var string
     */
    public $podStatus;

    /**
     * @var string
     */
    public $reason;
    protected $_name = [
        'message' => 'Message',
        'podName' => 'PodName',
        'podStatus' => 'PodStatus',
        'reason' => 'Reason',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->podName) {
            $res['PodName'] = $this->podName;
        }

        if (null !== $this->podStatus) {
            $res['PodStatus'] = $this->podStatus;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['PodName'])) {
            $model->podName = $map['PodName'];
        }

        if (isset($map['PodStatus'])) {
            $model->podStatus = $map['PodStatus'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
