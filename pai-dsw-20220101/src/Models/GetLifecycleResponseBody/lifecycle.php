<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\GetLifecycleResponseBody;

use AlibabaCloud\Tea\Model;

class lifecycle extends Model
{
    /**
     * @description The status of the instance. Valid values:
     *
     *   Creating
     *   SaveFailed: The instance image failed to be saved.
     *   Stopped
     *   Failed
     *   ResourceAllocating
     *   Stopping
     *   Updating
     *   Saving
     *   Starting
     *   Running
     *   Saved
     *   EnvPreparing: Preparing environment.
     *   ArrearStopping: The service is being stopped due to overdue payments.
     *   Arrearge: The service is stopped due to overdue payments.
     *   Queuing
     *   Recovering
     *
     * @example Starting
     *
     * @var string
     */
    public $status;

    /**
     * @description The reason code that corresponds to an event.
     *
     * @example “”
     *
     * @var string
     */
    public $reasonCode;

    /**
     * @description The reason message that corresponds to an event.
     *
     * @example “”
     *
     * @var string
     */
    public $reasonMessage;

    /**
     * @description The time the status was created, specifically the time the instance transitioned to this status (in GMT).
     *
     * @example 2022-10-21T07:27:44Z
     *
     * @var string
     */
    public $gmtCreateTime;
    protected $_name = [
        'status' => 'Status',
        'reasonCode' => 'ReasonCode',
        'reasonMessage' => 'ReasonMessage',
        'gmtCreateTime' => 'GmtCreateTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
        }
        if (null !== $this->reasonMessage) {
            $res['ReasonMessage'] = $this->reasonMessage;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lifecycle
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }
        if (isset($map['ReasonMessage'])) {
            $model->reasonMessage = $map['ReasonMessage'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        return $model;
    }
}
