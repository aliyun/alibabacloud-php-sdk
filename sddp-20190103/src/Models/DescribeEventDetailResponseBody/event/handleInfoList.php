<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventDetailResponseBody\event;

use AlibabaCloud\Tea\Model;

class handleInfoList extends Model
{
    /**
     * @description The account that is used to handle the anomalous event.
     *
     * @example sddp-test2
     *
     * @var string
     */
    public $currentValue;

    /**
     * @description The time when the account is disabled. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1611139155000
     *
     * @var int
     */
    public $disableTime;

    /**
     * @description The time when the disabled account is enabled. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1611139155000
     *
     * @var int
     */
    public $enableTime;

    /**
     * @description The handling method.
     *
     * @example Remove from the whitelist
     *
     * @var string
     */
    public $handlerName;

    /**
     * @description The type of the handling method.
     *
     * @example rds_security_ip
     *
     * @var string
     */
    public $handlerType;

    /**
     * @description The duration for which the handling operation takes effect. If you leave this parameter empty, the handling operation is permanently valid. Unit: minutes.
     *
     * @example 10
     *
     * @var int
     */
    public $handlerValue;

    /**
     * @description The ID of the handling rule.
     *
     * @example 11
     *
     * @var int
     */
    public $id;

    /**
     * @description The status of the account that triggered the anomalous event. Valid values:
     *
     *   **0**: disabled
     *   **1**: enabled
     *   **-1**: failed to disable the account
     *   **-2**: failed to enable the account
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'currentValue' => 'CurrentValue',
        'disableTime'  => 'DisableTime',
        'enableTime'   => 'EnableTime',
        'handlerName'  => 'HandlerName',
        'handlerType'  => 'HandlerType',
        'handlerValue' => 'HandlerValue',
        'id'           => 'Id',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentValue) {
            $res['CurrentValue'] = $this->currentValue;
        }
        if (null !== $this->disableTime) {
            $res['DisableTime'] = $this->disableTime;
        }
        if (null !== $this->enableTime) {
            $res['EnableTime'] = $this->enableTime;
        }
        if (null !== $this->handlerName) {
            $res['HandlerName'] = $this->handlerName;
        }
        if (null !== $this->handlerType) {
            $res['HandlerType'] = $this->handlerType;
        }
        if (null !== $this->handlerValue) {
            $res['HandlerValue'] = $this->handlerValue;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return handleInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentValue'])) {
            $model->currentValue = $map['CurrentValue'];
        }
        if (isset($map['DisableTime'])) {
            $model->disableTime = $map['DisableTime'];
        }
        if (isset($map['EnableTime'])) {
            $model->enableTime = $map['EnableTime'];
        }
        if (isset($map['HandlerName'])) {
            $model->handlerName = $map['HandlerName'];
        }
        if (isset($map['HandlerType'])) {
            $model->handlerType = $map['HandlerType'];
        }
        if (isset($map['HandlerValue'])) {
            $model->handlerValue = $map['HandlerValue'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
