<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\QueryRedemptionRecordsResponseBody\data;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string[]
     */
    public $allowedModels;

    /**
     * @var string
     */
    public $effectiveAt;

    /**
     * @var string
     */
    public $expireAt;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $keyHash;

    /**
     * @var string
     */
    public $outBizNo;

    /**
     * @var int
     */
    public $quotaBalance;

    /**
     * @var string
     */
    public $quotaStatus;

    /**
     * @var string
     */
    public $redemptionOrderNo;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'allowedModels' => 'allowedModels',
        'effectiveAt' => 'effectiveAt',
        'expireAt' => 'expireAt',
        'gmtCreate' => 'gmtCreate',
        'id' => 'id',
        'keyHash' => 'keyHash',
        'outBizNo' => 'outBizNo',
        'quotaBalance' => 'quotaBalance',
        'quotaStatus' => 'quotaStatus',
        'redemptionOrderNo' => 'redemptionOrderNo',
        'status' => 'status',
        'templateId' => 'templateId',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        if (\is_array($this->allowedModels)) {
            Model::validateArray($this->allowedModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedModels) {
            if (\is_array($this->allowedModels)) {
                $res['allowedModels'] = [];
                $n1 = 0;
                foreach ($this->allowedModels as $item1) {
                    $res['allowedModels'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->effectiveAt) {
            $res['effectiveAt'] = $this->effectiveAt;
        }

        if (null !== $this->expireAt) {
            $res['expireAt'] = $this->expireAt;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->keyHash) {
            $res['keyHash'] = $this->keyHash;
        }

        if (null !== $this->outBizNo) {
            $res['outBizNo'] = $this->outBizNo;
        }

        if (null !== $this->quotaBalance) {
            $res['quotaBalance'] = $this->quotaBalance;
        }

        if (null !== $this->quotaStatus) {
            $res['quotaStatus'] = $this->quotaStatus;
        }

        if (null !== $this->redemptionOrderNo) {
            $res['redemptionOrderNo'] = $this->redemptionOrderNo;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['allowedModels'])) {
            if (!empty($map['allowedModels'])) {
                $model->allowedModels = [];
                $n1 = 0;
                foreach ($map['allowedModels'] as $item1) {
                    $model->allowedModels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['effectiveAt'])) {
            $model->effectiveAt = $map['effectiveAt'];
        }

        if (isset($map['expireAt'])) {
            $model->expireAt = $map['expireAt'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['keyHash'])) {
            $model->keyHash = $map['keyHash'];
        }

        if (isset($map['outBizNo'])) {
            $model->outBizNo = $map['outBizNo'];
        }

        if (isset($map['quotaBalance'])) {
            $model->quotaBalance = $map['quotaBalance'];
        }

        if (isset($map['quotaStatus'])) {
            $model->quotaStatus = $map['quotaStatus'];
        }

        if (isset($map['redemptionOrderNo'])) {
            $model->redemptionOrderNo = $map['redemptionOrderNo'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
