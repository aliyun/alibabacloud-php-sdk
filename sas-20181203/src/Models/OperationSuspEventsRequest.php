<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class OperationSuspEventsRequest extends Model
{
    /**
     * @description The ID of the request source.
     *
     * Set the value to **sas**, which indicates that the request is sent from Security Center.
     * @example sas
     *
     * @var string
     */
    public $from;

    /**
     * @description The operation that you want to perform on alerts. Valid values:
     *
     *   **deal**: quarantines the source file of the malicious process.
     *   **ignore**: ignores the alerts.
     *   **mark_mis_info**: marks the alerts as false positives by adding the alerts to the whitelist.
     *   **rm_mark_mis_info**: cancels false positives by removing the alerts from the whitelist.
     *   **offline_handled**: marks the alerts as handled.
     *
     * @example deal
     *
     * @var string
     */
    public $operation;

    /**
     * @description The source IP address of the request.
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The suboperation that you want to perform when you quarantine the source file of the malicious process. Valid values:
     *
     *   **killAndQuaraFileByPidAndMd5andPath**: terminates the process based on its process ID (PID) and quarantines the source file of the process.
     *   **quaraFileByMd5andPath**: quarantines the source file of the process.
     *   **killAndQuaraFileByMd5andPath**: terminates the process and quarantines the source file of the process.
     *
     * @example killAndQuaraFileByPidAndMd5andPath
     *
     * @var string
     */
    public $subOperation;

    /**
     * @description The IDs of alert events.
     *
     * > You can call the [DescribeSuspEvents](~~DescribeSuspEvents~~) operation to obtain the IDs of alert events from the SecurityEventIds response parameter.
     * @example 290852
     *
     * @var string
     */
    public $suspiciousEventIds;

    /**
     * @description The type of the exceptions. Valid values:
     *
     *   **alarm**: alerts
     *   **null**: exceptions
     *
     * @example alarm
     *
     * @var string
     */
    public $warnType;
    protected $_name = [
        'from'               => 'From',
        'operation'          => 'Operation',
        'sourceIp'           => 'SourceIp',
        'subOperation'       => 'SubOperation',
        'suspiciousEventIds' => 'SuspiciousEventIds',
        'warnType'           => 'WarnType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->subOperation) {
            $res['SubOperation'] = $this->subOperation;
        }
        if (null !== $this->suspiciousEventIds) {
            $res['SuspiciousEventIds'] = $this->suspiciousEventIds;
        }
        if (null !== $this->warnType) {
            $res['WarnType'] = $this->warnType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperationSuspEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['SubOperation'])) {
            $model->subOperation = $map['SubOperation'];
        }
        if (isset($map['SuspiciousEventIds'])) {
            $model->suspiciousEventIds = $map['SuspiciousEventIds'];
        }
        if (isset($map['WarnType'])) {
            $model->warnType = $map['WarnType'];
        }

        return $model;
    }
}
