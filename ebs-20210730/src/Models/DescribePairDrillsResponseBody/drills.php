<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribePairDrillsResponseBody;

use AlibabaCloud\Dara\Model;

class drills extends Model
{
    /**
     * @var string
     */
    public $drillDiskId;
    /**
     * @var string
     */
    public $drillDiskStatus;
    /**
     * @var string
     */
    public $drillId;
    /**
     * @var int
     */
    public $recoverPoint;
    /**
     * @var int
     */
    public $startAt;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $statusMessage;
    protected $_name = [
        'drillDiskId'     => 'DrillDiskId',
        'drillDiskStatus' => 'DrillDiskStatus',
        'drillId'         => 'DrillId',
        'recoverPoint'    => 'RecoverPoint',
        'startAt'         => 'StartAt',
        'status'          => 'Status',
        'statusMessage'   => 'StatusMessage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->drillDiskId) {
            $res['DrillDiskId'] = $this->drillDiskId;
        }

        if (null !== $this->drillDiskStatus) {
            $res['DrillDiskStatus'] = $this->drillDiskStatus;
        }

        if (null !== $this->drillId) {
            $res['DrillId'] = $this->drillId;
        }

        if (null !== $this->recoverPoint) {
            $res['RecoverPoint'] = $this->recoverPoint;
        }

        if (null !== $this->startAt) {
            $res['StartAt'] = $this->startAt;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusMessage) {
            $res['StatusMessage'] = $this->statusMessage;
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
        if (isset($map['DrillDiskId'])) {
            $model->drillDiskId = $map['DrillDiskId'];
        }

        if (isset($map['DrillDiskStatus'])) {
            $model->drillDiskStatus = $map['DrillDiskStatus'];
        }

        if (isset($map['DrillId'])) {
            $model->drillId = $map['DrillId'];
        }

        if (isset($map['RecoverPoint'])) {
            $model->recoverPoint = $map['RecoverPoint'];
        }

        if (isset($map['StartAt'])) {
            $model->startAt = $map['StartAt'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusMessage'])) {
            $model->statusMessage = $map['StatusMessage'];
        }

        return $model;
    }
}
