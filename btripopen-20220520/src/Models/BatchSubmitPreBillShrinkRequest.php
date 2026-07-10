<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class BatchSubmitPreBillShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appIp;

    /**
     * @var string
     */
    public $billBatch;

    /**
     * @var int
     */
    public $customerDecision;

    /**
     * @var int
     */
    public $dimension;

    /**
     * @var string
     */
    public $valuesShrink;
    protected $_name = [
        'appIp' => 'app_ip',
        'billBatch' => 'bill_batch',
        'customerDecision' => 'customer_decision',
        'dimension' => 'dimension',
        'valuesShrink' => 'values',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appIp) {
            $res['app_ip'] = $this->appIp;
        }

        if (null !== $this->billBatch) {
            $res['bill_batch'] = $this->billBatch;
        }

        if (null !== $this->customerDecision) {
            $res['customer_decision'] = $this->customerDecision;
        }

        if (null !== $this->dimension) {
            $res['dimension'] = $this->dimension;
        }

        if (null !== $this->valuesShrink) {
            $res['values'] = $this->valuesShrink;
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
        if (isset($map['app_ip'])) {
            $model->appIp = $map['app_ip'];
        }

        if (isset($map['bill_batch'])) {
            $model->billBatch = $map['bill_batch'];
        }

        if (isset($map['customer_decision'])) {
            $model->customerDecision = $map['customer_decision'];
        }

        if (isset($map['dimension'])) {
            $model->dimension = $map['dimension'];
        }

        if (isset($map['values'])) {
            $model->valuesShrink = $map['values'];
        }

        return $model;
    }
}
