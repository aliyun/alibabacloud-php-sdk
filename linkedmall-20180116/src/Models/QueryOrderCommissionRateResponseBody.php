<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderCommissionRateResponseBody\commissionModels;
use AlibabaCloud\Tea\Model;

class QueryOrderCommissionRateResponseBody extends Model
{
    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $code;

    /**
     * @var commissionModels[]
     */
    public $commissionModels;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $message;

    /**
     * @example A7BE4356-7F92-533E-A31B-2EBF2D67****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'             => 'Code',
        'commissionModels' => 'CommissionModels',
        'message'          => 'Message',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->commissionModels) {
            $res['CommissionModels'] = [];
            if (null !== $this->commissionModels && \is_array($this->commissionModels)) {
                $n = 0;
                foreach ($this->commissionModels as $item) {
                    $res['CommissionModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryOrderCommissionRateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CommissionModels'])) {
            if (!empty($map['CommissionModels'])) {
                $model->commissionModels = [];
                $n                       = 0;
                foreach ($map['CommissionModels'] as $item) {
                    $model->commissionModels[$n++] = null !== $item ? commissionModels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
