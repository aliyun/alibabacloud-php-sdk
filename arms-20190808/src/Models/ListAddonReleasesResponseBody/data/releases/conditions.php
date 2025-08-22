<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListAddonReleasesResponseBody\data\releases;

use AlibabaCloud\Dara\Model;

class conditions extends Model
{
    /**
     * @var string
     */
    public $firstTransitionTime;

    /**
     * @var string
     */
    public $lastTransitionTime;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'firstTransitionTime' => 'FirstTransitionTime',
        'lastTransitionTime' => 'LastTransitionTime',
        'message' => 'Message',
        'reason' => 'Reason',
        'status' => 'Status',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->firstTransitionTime) {
            $res['FirstTransitionTime'] = $this->firstTransitionTime;
        }

        if (null !== $this->lastTransitionTime) {
            $res['LastTransitionTime'] = $this->lastTransitionTime;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['FirstTransitionTime'])) {
            $model->firstTransitionTime = $map['FirstTransitionTime'];
        }

        if (isset($map['LastTransitionTime'])) {
            $model->lastTransitionTime = $map['LastTransitionTime'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
