<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class HandleSimilarSecurityEventsRequest extends Model
{
    /**
     * @description The rule condition based on which the alerts are added to the whitelist. For example, if you want to add a file that contains the string a to the whitelist based on the MD5 hash value, set this parameter to {"field":"md5","operate":"contains","fieldValue":"aa"}.
     *
     * @example {"field":"md5","operate":"contains","fieldValue":"aa"}
     *
     * @var string
     */
    public $markMissParam;

    /**
     * @description The operation that is performed to handle alerts of the same type at a time. Valid values:
     * - **deal**: quarantines the source file of the malicious process.
     * - **killand_quara**: kills the malicious processes and quarantines the source file.
     * - **kill_virus**: deletes the source file of the malicious process.
     * - **block_ip**: blocks the source IP address.
     * - **ignore**: ignores the alerts.
     * - **advance\_mark\_mis_info**: marks the alerts as false positives by adding the alerts to the whitelist.
     * - **rm\_mark\_mis\_info**: cancels false positives by removing the alerts from the whitelist.
     * - **offline_handled**: marks the alerts as handled.
     * @example offline_handled
     *
     * @var string
     */
    public $operationCode;

    /**
     * @description The configuration for a sub-operation to handle alerts.
     *
     * > If you set OperationCode to kill_and_quara or block_ip, you must specify OperationParams. If you set OperationCode to other values, you can leave OperationParams empty.
     * @example {"expireTime":1646208726195}
     *
     * @var string
     */
    public $operationParams;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The source IP address of the request.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The ID of the task that handles multiple alerts of the same type at a time.
     *
     * @example 666038
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'markMissParam'   => 'MarkMissParam',
        'operationCode'   => 'OperationCode',
        'operationParams' => 'OperationParams',
        'resourceOwnerId' => 'ResourceOwnerId',
        'sourceIp'        => 'SourceIp',
        'taskId'          => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->markMissParam) {
            $res['MarkMissParam'] = $this->markMissParam;
        }
        if (null !== $this->operationCode) {
            $res['OperationCode'] = $this->operationCode;
        }
        if (null !== $this->operationParams) {
            $res['OperationParams'] = $this->operationParams;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HandleSimilarSecurityEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MarkMissParam'])) {
            $model->markMissParam = $map['MarkMissParam'];
        }
        if (isset($map['OperationCode'])) {
            $model->operationCode = $map['OperationCode'];
        }
        if (isset($map['OperationParams'])) {
            $model->operationParams = $map['OperationParams'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
