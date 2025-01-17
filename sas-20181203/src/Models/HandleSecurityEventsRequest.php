<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $remark;
    /**
     * @var int
     */
    public $resourceDirectoryAccountId;
    /**
     * @var string[]
     */
    public $securityEventIds;
    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'markBatch'                  => 'MarkBatch',
        'markMissParam'              => 'MarkMissParam',
        'operationCode'              => 'OperationCode',
        'operationParams'            => 'OperationParams',
        'remark'                     => 'Remark',
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
        'securityEventIds'           => 'SecurityEventIds',
        'sourceIp'                   => 'SourceIp',
    ];

    public function validate()
    {
        if (\is_array($this->securityEventIds)) {
            Model::validateArray($this->securityEventIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
        }

        if (null !== $this->securityEventIds) {
            if (\is_array($this->securityEventIds)) {
                $res['SecurityEventIds'] = [];
                $n1                      = 0;
                foreach ($this->securityEventIds as $item1) {
                    $res['SecurityEventIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
        }

        if (isset($map['SecurityEventIds'])) {
            if (!empty($map['SecurityEventIds'])) {
                $model->securityEventIds = [];
                $n1                      = 0;
                foreach ($map['SecurityEventIds'] as $item1) {
                    $model->securityEventIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
