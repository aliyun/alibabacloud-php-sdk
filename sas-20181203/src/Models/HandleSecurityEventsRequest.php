<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class HandleSecurityEventsRequest extends Model
{
    /**
     * @description Specifies whether to add multiple alert events to the whitelist at a time. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var string
     */
    public $markBatch;

    /**
     * @description The whitelist rule. The value of this parameter is in the JSON format and contains the following fields:
     *
     *   **field**: The field based on which alert events are added to the whitelist.
     *
     *   **operate**: The method that is used to added alert events to the whitelist. Valid values:
     *
     *   **notContains**: does not contain
     *   **contains**: contains
     *   **regex**: matches by regular expression
     *   **strEqual**: equals
     *   **strNotEqual**: does not equal
     *
     *   **fieldValue**: The value of the field based on which alert events are added to the whitelist.
     *
     *   **uuid**: The application scope of the whitelist rule. Valid values:
     *
     *   **part**: the current asset
     *   **ALL**: all assets
     *
     * >  You can call the [DescribeSecurityEventOperations](~~DescribeSecurityEventOperations~~) operation to obtain the fields that you can specify for **field**.
     * @example [{"uuid":"part","field":"gmtModified","operate":"contains","fieldValue":"asd"},{"uuid":"part","field":"loginUser","operate":"contains","fieldValue":"vff"}]
     *
     * @var string
     */
    public $markMissParam;

    /**
     * @description The operation that you want to perform to handle the alert events. Valid values:
     *
     *   **block_ip**: blocks the source IP address.
     *   **advance\_mark\_mis_info**: adds the alert events to the whitelist.
     *   **ignore**: ignores the alert events.
     *   **manual_handled**: marks the alert events as manually handled.
     *   **kill_process**: terminates the malicious process.
     *   **cleanup**: performs in-depth virus detection and removal.
     *   **kill\_and_quara**: kills the malicious processes and quarantines the source file.
     *   **disable\_malicious_defense**: stops the container on which the alerting files or processes exist.
     *   **client\_problem_check**: performs troubleshooting.
     *   **quara**: quarantines the source file of the malicious process.
     *
     * @example block_ip
     *
     * @var string
     */
    public $operationCode;

    /**
     * @description The configuration of the operation that you want to perform to handle the alert events.
     *
     * >  If you set OperationCode to `kill_and_quara` or `block_ip`, you must specify OperationParams. If you set OperationCode to other values, you can leave OperationParams empty.
     * @example {}
     *
     * @var string
     */
    public $operationParams;

    /**
     * @description The remarks of the handling operation.
     *
     * @example remark test.
     *
     * @var string
     */
    public $remark;

    /**
     * @description The IDs of the alert events.
     *
     * @example ["909361"]
     *
     * @var string[]
     */
    public $securityEventIds;

    /**
     * @description The source IP address of the request.
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'markBatch'        => 'MarkBatch',
        'markMissParam'    => 'MarkMissParam',
        'operationCode'    => 'OperationCode',
        'operationParams'  => 'OperationParams',
        'remark'           => 'Remark',
        'securityEventIds' => 'SecurityEventIds',
        'sourceIp'         => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->markBatch) {
            $res['MarkBatch'] = $this->markBatch;
        }
        if (null !== $this->markMissParam) {
            $res['MarkMissParam'] = $this->markMissParam;
        }
        if (null !== $this->operationCode) {
            $res['OperationCode'] = $this->operationCode;
        }
        if (null !== $this->operationParams) {
            $res['OperationParams'] = $this->operationParams;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->securityEventIds) {
            $res['SecurityEventIds'] = $this->securityEventIds;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HandleSecurityEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MarkBatch'])) {
            $model->markBatch = $map['MarkBatch'];
        }
        if (isset($map['MarkMissParam'])) {
            $model->markMissParam = $map['MarkMissParam'];
        }
        if (isset($map['OperationCode'])) {
            $model->operationCode = $map['OperationCode'];
        }
        if (isset($map['OperationParams'])) {
            $model->operationParams = $map['OperationParams'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['SecurityEventIds'])) {
            if (!empty($map['SecurityEventIds'])) {
                $model->securityEventIds = $map['SecurityEventIds'];
            }
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
