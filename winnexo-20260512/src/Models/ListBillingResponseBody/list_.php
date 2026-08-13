<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListBillingResponseBody;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $billingId;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string[]
     */
    public $costSource;

    /**
     * @var string[]
     */
    public $costSourceDisplayName;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $entryObjectId;

    /**
     * @var string
     */
    public $entryObjectType;

    /**
     * @var bool
     */
    public $isShadow;

    /**
     * @var string
     */
    public $operation;

    /**
     * @var string
     */
    public $operationDisplayName;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusDisplayName;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $totalCreditCost;

    /**
     * @var string
     */
    public $wnUserId;
    protected $_name = [
        'billingId' => 'billingId',
        'bizId' => 'bizId',
        'bizType' => 'bizType',
        'costSource' => 'costSource',
        'costSourceDisplayName' => 'costSourceDisplayName',
        'endTime' => 'endTime',
        'entryObjectId' => 'entryObjectId',
        'entryObjectType' => 'entryObjectType',
        'isShadow' => 'isShadow',
        'operation' => 'operation',
        'operationDisplayName' => 'operationDisplayName',
        'startTime' => 'startTime',
        'status' => 'status',
        'statusDisplayName' => 'statusDisplayName',
        'tenantId' => 'tenantId',
        'totalCreditCost' => 'totalCreditCost',
        'wnUserId' => 'wnUserId',
    ];

    public function validate()
    {
        if (\is_array($this->costSource)) {
            Model::validateArray($this->costSource);
        }
        if (\is_array($this->costSourceDisplayName)) {
            Model::validateArray($this->costSourceDisplayName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billingId) {
            $res['billingId'] = $this->billingId;
        }

        if (null !== $this->bizId) {
            $res['bizId'] = $this->bizId;
        }

        if (null !== $this->bizType) {
            $res['bizType'] = $this->bizType;
        }

        if (null !== $this->costSource) {
            if (\is_array($this->costSource)) {
                $res['costSource'] = [];
                $n1 = 0;
                foreach ($this->costSource as $item1) {
                    $res['costSource'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->costSourceDisplayName) {
            if (\is_array($this->costSourceDisplayName)) {
                $res['costSourceDisplayName'] = [];
                $n1 = 0;
                foreach ($this->costSourceDisplayName as $item1) {
                    $res['costSourceDisplayName'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->entryObjectId) {
            $res['entryObjectId'] = $this->entryObjectId;
        }

        if (null !== $this->entryObjectType) {
            $res['entryObjectType'] = $this->entryObjectType;
        }

        if (null !== $this->isShadow) {
            $res['isShadow'] = $this->isShadow;
        }

        if (null !== $this->operation) {
            $res['operation'] = $this->operation;
        }

        if (null !== $this->operationDisplayName) {
            $res['operationDisplayName'] = $this->operationDisplayName;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->statusDisplayName) {
            $res['statusDisplayName'] = $this->statusDisplayName;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->totalCreditCost) {
            $res['totalCreditCost'] = $this->totalCreditCost;
        }

        if (null !== $this->wnUserId) {
            $res['wnUserId'] = $this->wnUserId;
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
        if (isset($map['billingId'])) {
            $model->billingId = $map['billingId'];
        }

        if (isset($map['bizId'])) {
            $model->bizId = $map['bizId'];
        }

        if (isset($map['bizType'])) {
            $model->bizType = $map['bizType'];
        }

        if (isset($map['costSource'])) {
            if (!empty($map['costSource'])) {
                $model->costSource = [];
                $n1 = 0;
                foreach ($map['costSource'] as $item1) {
                    $model->costSource[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['costSourceDisplayName'])) {
            if (!empty($map['costSourceDisplayName'])) {
                $model->costSourceDisplayName = [];
                $n1 = 0;
                foreach ($map['costSourceDisplayName'] as $item1) {
                    $model->costSourceDisplayName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['entryObjectId'])) {
            $model->entryObjectId = $map['entryObjectId'];
        }

        if (isset($map['entryObjectType'])) {
            $model->entryObjectType = $map['entryObjectType'];
        }

        if (isset($map['isShadow'])) {
            $model->isShadow = $map['isShadow'];
        }

        if (isset($map['operation'])) {
            $model->operation = $map['operation'];
        }

        if (isset($map['operationDisplayName'])) {
            $model->operationDisplayName = $map['operationDisplayName'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['statusDisplayName'])) {
            $model->statusDisplayName = $map['statusDisplayName'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['totalCreditCost'])) {
            $model->totalCreditCost = $map['totalCreditCost'];
        }

        if (isset($map['wnUserId'])) {
            $model->wnUserId = $map['wnUserId'];
        }

        return $model;
    }
}
