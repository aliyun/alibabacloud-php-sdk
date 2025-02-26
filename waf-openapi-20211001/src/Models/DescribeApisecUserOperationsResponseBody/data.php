<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecUserOperationsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $fromStatus;
    /**
     * @var string
     */
    public $note;
    /**
     * @var string
     */
    public $objectId;
    /**
     * @var int
     */
    public $time;
    /**
     * @var string
     */
    public $toStatus;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'fromStatus' => 'FromStatus',
        'note'       => 'Note',
        'objectId'   => 'ObjectId',
        'time'       => 'Time',
        'toStatus'   => 'ToStatus',
        'type'       => 'Type',
        'userId'     => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fromStatus) {
            $res['FromStatus'] = $this->fromStatus;
        }

        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }

        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        if (null !== $this->toStatus) {
            $res['ToStatus'] = $this->toStatus;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['FromStatus'])) {
            $model->fromStatus = $map['FromStatus'];
        }

        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }

        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        if (isset($map['ToStatus'])) {
            $model->toStatus = $map['ToStatus'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
