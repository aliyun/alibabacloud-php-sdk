<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822\Models;

use AlibabaCloud\Dara\Model;

class UpdateSecurityEventStatusRequest extends Model
{
    /**
     * @var string
     */
    public $aliUid;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $callerParentId;

    /**
     * @var string
     */
    public $callerType;

    /**
     * @var int
     */
    public $callerUid;
    protected $_name = [
        'aliUid' => 'AliUid',
        'eventId' => 'EventId',
        'status' => 'Status',
        'callerParentId' => 'callerParentId',
        'callerType' => 'callerType',
        'callerUid' => 'callerUid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->callerParentId) {
            $res['callerParentId'] = $this->callerParentId;
        }

        if (null !== $this->callerType) {
            $res['callerType'] = $this->callerType;
        }

        if (null !== $this->callerUid) {
            $res['callerUid'] = $this->callerUid;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['callerParentId'])) {
            $model->callerParentId = $map['callerParentId'];
        }

        if (isset($map['callerType'])) {
            $model->callerType = $map['callerType'];
        }

        if (isset($map['callerUid'])) {
            $model->callerUid = $map['callerUid'];
        }

        return $model;
    }
}
