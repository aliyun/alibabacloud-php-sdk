<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderCommissionRateResponseBody\commissionModels;
use AlibabaCloud\Tea\Model;

class QueryOrderCommissionRateResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var commissionModels[]
     */
    public $commissionModels;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'message'          => 'Message',
        'requestId'        => 'RequestId',
        'commissionModels' => 'CommissionModels',
        'code'             => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
