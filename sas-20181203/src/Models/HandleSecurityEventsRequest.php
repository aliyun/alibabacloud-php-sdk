<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class HandleSecurityEventsRequest extends Model
{
    /**
     * @var string
     */
    public $markBatch;

    /**
     * @var string
     */
    public $markMissParam;

    /**
     * @var string
     */
    public $operationCode;

    /**
     * @var string
     */
    public $operationParams;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string[]
     */
    public $securityEventIds;

    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'markBatch'        => 'MarkBatch',
        'markMissParam'    => 'MarkMissParam',
        'operationCode'    => 'OperationCode',
        'operationParams'  => 'OperationParams',
        'resourceOwnerId'  => 'ResourceOwnerId',
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
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
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
