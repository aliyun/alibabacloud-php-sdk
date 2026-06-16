<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetAliYunSafeCenterResultRequest;

use AlibabaCloud\Dara\Model;

class handleSecurityEventsRequest extends Model
{
    /**
     * @var string
     */
    public $alertType;

    /**
     * @var string
     */
    public $fileMd5;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ip;

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
    public $regionId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string[]
     */
    public $securityEventIds;
    protected $_name = [
        'alertType' => 'AlertType',
        'fileMd5' => 'FileMd5',
        'filePath' => 'FilePath',
        'instanceId' => 'InstanceId',
        'ip' => 'Ip',
        'markBatch' => 'MarkBatch',
        'markMissParam' => 'MarkMissParam',
        'operationCode' => 'OperationCode',
        'operationParams' => 'OperationParams',
        'regionId' => 'RegionId',
        'remark' => 'Remark',
        'securityEventIds' => 'SecurityEventIds',
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
        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }

        if (null !== $this->fileMd5) {
            $res['FileMd5'] = $this->fileMd5;
        }

        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->securityEventIds) {
            if (\is_array($this->securityEventIds)) {
                $res['SecurityEventIds'] = [];
                $n1 = 0;
                foreach ($this->securityEventIds as $item1) {
                    $res['SecurityEventIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }

        if (isset($map['FileMd5'])) {
            $model->fileMd5 = $map['FileMd5'];
        }

        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['SecurityEventIds'])) {
            if (!empty($map['SecurityEventIds'])) {
                $model->securityEventIds = [];
                $n1 = 0;
                foreach ($map['SecurityEventIds'] as $item1) {
                    $model->securityEventIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
