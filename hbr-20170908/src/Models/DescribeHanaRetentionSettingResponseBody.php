<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class DescribeHanaRetentionSettingResponseBody extends Model
{
    /**
     * @description The ID of the SAP HANA instance.
     *
     * @example cl-0003jyv******fsku5m
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The HTTP status code. The status code 200 indicates that the call is successful.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The name of the database.
     *
     * @example Q01
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description Indicates whether the backup is permanently retained. Valid values:
     *
     *   true: The backup is permanently retained.
     *   false: The backup is retained for the specified number of days.
     *
     * @example false
     *
     * @var bool
     */
    public $disabled;

    /**
     * @description The message that is returned. If the call is successful, "successful" is returned. If the call fails, an error message is returned.
     *
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 280DD872-EE25-52E8-9CB4-491067173DD0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of days for which the backup is retained. If the value of the Disabled parameter is false, the backup is retained for the number of days specified by this parameter.
     *
     * @example 3650
     *
     * @var int
     */
    public $retentionDays;

    /**
     * @description The policy to update the retention period. Format: `I|{startTime}|{interval}`, which indicates that the retention period is updated at an interval of {interval} starting from {startTime}.
     *
     *   startTime: the time at which the system starts to update the retention period. The time follows the UNIX time format. Unit: seconds.
     *   interval: the interval at which the system updates the retention period. The interval follows the ISO 8601 standard. For example, PT1H indicates an interval of 1 hour. P1D indicates an interval of one day.
     *
     * @example I|0|P1D
     *
     * @var string
     */
    public $schedule;

    /**
     * @description Indicates whether the call is successful. Valid values:
     *
     *   true: The call is successful.
     *   false: The call fails.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The ID of the backup vault.
     *
     * @example v-0006wkn7******zkn
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'clusterId'     => 'ClusterId',
        'code'          => 'Code',
        'databaseName'  => 'DatabaseName',
        'disabled'      => 'Disabled',
        'message'       => 'Message',
        'requestId'     => 'RequestId',
        'retentionDays' => 'RetentionDays',
        'schedule'      => 'Schedule',
        'success'       => 'Success',
        'vaultId'       => 'VaultId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
        }
        if (null !== $this->schedule) {
            $res['Schedule'] = $this->schedule;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHanaRetentionSettingResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }
        if (isset($map['Schedule'])) {
            $model->schedule = $map['Schedule'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
