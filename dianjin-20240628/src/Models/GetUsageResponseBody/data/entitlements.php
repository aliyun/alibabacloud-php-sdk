<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetUsageResponseBody\data;

use AlibabaCloud\Dara\Model;

class entitlements extends Model
{
    /**
     * @var string[]
     */
    public $allowedModels;

    /**
     * @var int
     */
    public $bindingId;

    /**
     * @var string
     */
    public $effectiveAt;

    /**
     * @var string
     */
    public $expireAt;

    /**
     * @var int
     */
    public $quotaInitial;

    /**
     * @var int
     */
    public $quotaRemaining;

    /**
     * @var int
     */
    public $quotaUsed;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'allowedModels' => 'allowedModels',
        'bindingId' => 'bindingId',
        'effectiveAt' => 'effectiveAt',
        'expireAt' => 'expireAt',
        'quotaInitial' => 'quotaInitial',
        'quotaRemaining' => 'quotaRemaining',
        'quotaUsed' => 'quotaUsed',
        'status' => 'status',
        'templateId' => 'templateId',
        'templateName' => 'templateName',
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

        if (null !== $this->bindingId) {
            $res['bindingId'] = $this->bindingId;
        }

        if (null !== $this->effectiveAt) {
            $res['effectiveAt'] = $this->effectiveAt;
        }

        if (null !== $this->expireAt) {
            $res['expireAt'] = $this->expireAt;
        }

        if (null !== $this->quotaInitial) {
            $res['quotaInitial'] = $this->quotaInitial;
        }

        if (null !== $this->quotaRemaining) {
            $res['quotaRemaining'] = $this->quotaRemaining;
        }

        if (null !== $this->quotaUsed) {
            $res['quotaUsed'] = $this->quotaUsed;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
        }

        if (null !== $this->templateName) {
            $res['templateName'] = $this->templateName;
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

        if (isset($map['bindingId'])) {
            $model->bindingId = $map['bindingId'];
        }

        if (isset($map['effectiveAt'])) {
            $model->effectiveAt = $map['effectiveAt'];
        }

        if (isset($map['expireAt'])) {
            $model->expireAt = $map['expireAt'];
        }

        if (isset($map['quotaInitial'])) {
            $model->quotaInitial = $map['quotaInitial'];
        }

        if (isset($map['quotaRemaining'])) {
            $model->quotaRemaining = $map['quotaRemaining'];
        }

        if (isset($map['quotaUsed'])) {
            $model->quotaUsed = $map['quotaUsed'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }

        if (isset($map['templateName'])) {
            $model->templateName = $map['templateName'];
        }

        return $model;
    }
}
