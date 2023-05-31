<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class HandleSimilarSecurityEventsRequest extends Model
{
    /**
     * @description The whitelist rule. For example, if you want to add a file that contains the string a to the whitelist based on the MD5 hash value, set this parameter to {"field":"md5","operate":"contains","fieldValue":"aa"}.
     *
     * @example {"field":"md5","operate":"contains","fieldValue":"aa"}
     *
     * @var string
     */
    public $markMissParam;

    /**
     * @description The operation that you want to perform to handle the alert events.
     *
     * >  You can call the [DescribeSecurityEventOperations](~~DescribeSecurityEventOperations~~) operation to query the operations.
     * @example offline_handled
     *
     * @var string
     */
    public $operationCode;

    /**
     * @description The configuration of the operation that you want to perform to handle the alert events. The value of this parameter is in the JSON format.
     *
     * >  If you set **OperationCode** to **kill\_and\_quara**, **block\_ip**, or **virus\_quara**, you must specify OperationParams. If you set **OperationCode** to other values, you can leave OperationParams empty. If you set **OperationCode** to **block_ip**, the value of OperationParams must consist of the following fields:
     *
     * > *   **expireTime**: the end time of locking. Unit: milliseconds.
     *
     * >  If you set **OperationCode** to **kill\_and_quara**, the value of OperationParams must consist of the following fields:
     *
     * > *   **subOperation**: the method of detection and removal. Valid values:
     *
     * >     *   **killAndQuaraFileByMd5andPath**: terminates the process and quarantines the source file of the process.
     * >     *   **killByMd5andPath**: terminates the running process.
     *
     * >  If you set **OperationCode** to **virus_quara**, the value of OperationParams consists of the following fields:
     *
     * > *   **subOperation**: the method of detection and removal. Valid values:
     *
     * >     *   **quaraFileByMd5andPath**: quarantines the source file of the process.
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
     * @description The ID of the task that handles the alert events at a time.
     *
     * >  You can call the [CreateSimilarSecurityEventsQueryTask](~~CreateSimilarSecurityEventsQueryTask~~) operation to query the IDs of tasks.
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
