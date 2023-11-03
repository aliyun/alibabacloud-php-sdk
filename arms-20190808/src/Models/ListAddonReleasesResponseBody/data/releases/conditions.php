<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListAddonReleasesResponseBody\data\releases;

use AlibabaCloud\Tea\Model;

class conditions extends Model
{
    /**
     * @description First transition time.
     *
     * @example 2018-01-31T14:32:19Z
     *
     * @var string
     */
    public $firstTransitionTime;

    /**
     * @description Last transition time.
     *
     * @example 2018-01-31T14:32:19Z
     *
     * @var string
     */
    public $lastTransitionTime;

    /**
     * @description Details.
     *
     * @example xxxx
     *
     * @var string
     */
    public $message;

    /**
     * @description Reason of failure.
     *
     * @example xxxx
     *
     * @var string
     */
    public $reason;

    /**
     * @description Condition status.
     *
     * @example True
     *
     * @var string
     */
    public $status;

    /**
     * @description Condition type.
     *
     * @example Loaded
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'firstTransitionTime' => 'FirstTransitionTime',
        'lastTransitionTime'  => 'LastTransitionTime',
        'message'             => 'Message',
        'reason'              => 'Reason',
        'status'              => 'Status',
        'type'                => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return conditions
     */
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
