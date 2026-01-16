<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateInstanceChargeTypeRequest\paymentInfo;

class UpdateInstanceChargeTypeRequest extends Model
{
    /**
     * @var paymentInfo
     */
    public $paymentInfo;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'paymentInfo' => 'paymentInfo',
        'paymentType' => 'paymentType',
        'clientToken' => 'clientToken',
    ];

    public function validate()
    {
        if (null !== $this->paymentInfo) {
            $this->paymentInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->paymentInfo) {
            $res['paymentInfo'] = null !== $this->paymentInfo ? $this->paymentInfo->toArray($noStream) : $this->paymentInfo;
        }

        if (null !== $this->paymentType) {
            $res['paymentType'] = $this->paymentType;
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
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
        if (isset($map['paymentInfo'])) {
            $model->paymentInfo = paymentInfo::fromMap($map['paymentInfo']);
        }

        if (isset($map['paymentType'])) {
            $model->paymentType = $map['paymentType'];
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
