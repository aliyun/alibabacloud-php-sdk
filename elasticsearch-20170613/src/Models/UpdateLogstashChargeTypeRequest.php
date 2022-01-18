<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateLogstashChargeTypeRequest\paymentInfo;
use AlibabaCloud\Tea\Model;

class UpdateLogstashChargeTypeRequest extends Model
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paymentInfo) {
            $res['paymentInfo'] = null !== $this->paymentInfo ? $this->paymentInfo->toMap() : null;
        }
        if (null !== $this->paymentType) {
            $res['paymentType'] = $this->paymentType;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLogstashChargeTypeRequest
     */
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
