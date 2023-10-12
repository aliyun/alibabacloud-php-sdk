<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class AutoDutyRequest extends Model
{
    /**
     * @var string
     */
    public $dutyBatch;

    /**
     * @var string
     */
    public $dutyName;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $startDate;
    protected $_name = [
        'dutyBatch'  => 'DutyBatch',
        'dutyName'   => 'DutyName',
        'endDate'    => 'EndDate',
        'instanceId' => 'InstanceId',
        'startDate'  => 'StartDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dutyBatch) {
            $res['DutyBatch'] = $this->dutyBatch;
        }
        if (null !== $this->dutyName) {
            $res['DutyName'] = $this->dutyName;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AutoDutyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DutyBatch'])) {
            $model->dutyBatch = $map['DutyBatch'];
        }
        if (isset($map['DutyName'])) {
            $model->dutyName = $map['DutyName'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
