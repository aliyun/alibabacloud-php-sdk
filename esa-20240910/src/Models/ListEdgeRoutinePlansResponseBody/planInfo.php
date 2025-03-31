<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListEdgeRoutinePlansResponseBody;

use AlibabaCloud\Dara\Model;

class planInfo extends Model
{
    /**
     * @var string
     */
    public $billingMode;

    /**
     * @var string
     */
    public $erRoutineCodeVersionQuota;

    /**
     * @var string
     */
    public $erRoutineQuota;

    /**
     * @var string
     */
    public $erRoutineRouteSiteCountQuota;

    /**
     * @var string
     */
    public $paymentMethod;

    /**
     * @var string
     */
    public $planName;
    protected $_name = [
        'billingMode' => 'BillingMode',
        'erRoutineCodeVersionQuota' => 'ErRoutineCodeVersionQuota',
        'erRoutineQuota' => 'ErRoutineQuota',
        'erRoutineRouteSiteCountQuota' => 'ErRoutineRouteSiteCountQuota',
        'paymentMethod' => 'PaymentMethod',
        'planName' => 'PlanName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billingMode) {
            $res['BillingMode'] = $this->billingMode;
        }

        if (null !== $this->erRoutineCodeVersionQuota) {
            $res['ErRoutineCodeVersionQuota'] = $this->erRoutineCodeVersionQuota;
        }

        if (null !== $this->erRoutineQuota) {
            $res['ErRoutineQuota'] = $this->erRoutineQuota;
        }

        if (null !== $this->erRoutineRouteSiteCountQuota) {
            $res['ErRoutineRouteSiteCountQuota'] = $this->erRoutineRouteSiteCountQuota;
        }

        if (null !== $this->paymentMethod) {
            $res['PaymentMethod'] = $this->paymentMethod;
        }

        if (null !== $this->planName) {
            $res['PlanName'] = $this->planName;
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
        if (isset($map['BillingMode'])) {
            $model->billingMode = $map['BillingMode'];
        }

        if (isset($map['ErRoutineCodeVersionQuota'])) {
            $model->erRoutineCodeVersionQuota = $map['ErRoutineCodeVersionQuota'];
        }

        if (isset($map['ErRoutineQuota'])) {
            $model->erRoutineQuota = $map['ErRoutineQuota'];
        }

        if (isset($map['ErRoutineRouteSiteCountQuota'])) {
            $model->erRoutineRouteSiteCountQuota = $map['ErRoutineRouteSiteCountQuota'];
        }

        if (isset($map['PaymentMethod'])) {
            $model->paymentMethod = $map['PaymentMethod'];
        }

        if (isset($map['PlanName'])) {
            $model->planName = $map['PlanName'];
        }

        return $model;
    }
}
