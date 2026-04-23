<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ModelRouterUpdateBillingRuleRequest extends Model
{
    /**
     * @var string
     */
    public $billingType;

    /**
     * @var string
     */
    public $effectiveTime;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var mixed
     */
    public $pricingConfig;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'billingType' => 'billingType',
        'effectiveTime' => 'effectiveTime',
        'expireTime' => 'expireTime',
        'pricingConfig' => 'pricingConfig',
        'status' => 'status',
        'version' => 'version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billingType) {
            $res['billingType'] = $this->billingType;
        }

        if (null !== $this->effectiveTime) {
            $res['effectiveTime'] = $this->effectiveTime;
        }

        if (null !== $this->expireTime) {
            $res['expireTime'] = $this->expireTime;
        }

        if (null !== $this->pricingConfig) {
            $res['pricingConfig'] = $this->pricingConfig;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['billingType'])) {
            $model->billingType = $map['billingType'];
        }

        if (isset($map['effectiveTime'])) {
            $model->effectiveTime = $map['effectiveTime'];
        }

        if (isset($map['expireTime'])) {
            $model->expireTime = $map['expireTime'];
        }

        if (isset($map['pricingConfig'])) {
            $model->pricingConfig = $map['pricingConfig'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
