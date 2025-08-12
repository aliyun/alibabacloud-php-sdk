<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutHybridMonitorMetricDataResponseBody\errorDetail;

class PutHybridMonitorMetricDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var errorDetail[]
     */
    public $errorDetail;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'Code',
        'errorDetail' => 'ErrorDetail',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->errorDetail)) {
            Model::validateArray($this->errorDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->errorDetail) {
            if (\is_array($this->errorDetail)) {
                $res['ErrorDetail'] = [];
                $n1 = 0;
                foreach ($this->errorDetail as $item1) {
                    $res['ErrorDetail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['ErrorDetail'])) {
            if (!empty($map['ErrorDetail'])) {
                $model->errorDetail = [];
                $n1 = 0;
                foreach ($map['ErrorDetail'] as $item1) {
                    $model->errorDetail[$n1] = errorDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
