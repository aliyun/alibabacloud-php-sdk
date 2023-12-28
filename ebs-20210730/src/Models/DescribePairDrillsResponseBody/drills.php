<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribePairDrillsResponseBody;

use AlibabaCloud\Tea\Model;

class drills extends Model
{
    /**
     * @description The ID of the drill disk.
     *
     * @example d-xxx
     *
     * @var string
     */
    public $drillDiskId;

    /**
     * @description The status of the drill disk. Valid values:
     *
     *   created
     *   deleted
     *   creating
     *   deleting
     *
     * >  This parameter can also display error code details if your drill disk fails to be created or deleted.
     * @example created
     *
     * @var string
     */
    public $drillDiskStatus;

    /**
     * @description The ID of the drill.
     *
     * @example drill-xxx
     *
     * @var string
     */
    public $drillId;

    /**
     * @description The recovery point of the drill. The value of this parameter is a timestamp. Unit: seconds.
     *
     * @example 1690855931
     *
     * @var int
     */
    public $recoverPoint;

    /**
     * @description The beginning time of the drill. The value of this parameter is a timestamp. Unit: seconds.
     *
     * @example 1690855888
     *
     * @var int
     */
    public $startAt;

    /**
     * @description The status of the drill. Valid values:
     *
     *   execute_failed
     *   executed
     *   executing
     *   clear_failed
     *   clearing
     *
     * @example executing
     *
     * @var string
     */
    public $status;

    /**
     * @description The error message that was displayed if the drill failed to be executed.
     *
     * @example PAIR_SYNCPOINT_NOT_FOUND
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return drills
     */
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
