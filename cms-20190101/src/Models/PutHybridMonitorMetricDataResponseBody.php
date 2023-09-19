<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutHybridMonitorMetricDataResponseBody\errorDetail;
use AlibabaCloud\Tea\Model;

class PutHybridMonitorMetricDataResponseBody extends Model
{
    /**
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the request was successful.
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The details of invalid parameters.
     *
     * If a request parameter is invalid, the details of the invalid parameter are returned.
     * @var errorDetail[]
     */
    public $errorDetail;

    /**
     * @description The request ID.
     *
     * @example 5DB1CBCA-D14A-55FA-814F-B4DBD9735F68
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'        => 'Code',
        'errorDetail' => 'ErrorDetail',
        'requestId'   => 'RequestId',
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
        if (null !== $this->errorDetail) {
            $res['ErrorDetail'] = [];
            if (null !== $this->errorDetail && \is_array($this->errorDetail)) {
                $n = 0;
                foreach ($this->errorDetail as $item) {
                    $res['ErrorDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutHybridMonitorMetricDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ErrorDetail'])) {
            if (!empty($map['ErrorDetail'])) {
                $model->errorDetail = [];
                $n                  = 0;
                foreach ($map['ErrorDetail'] as $item) {
                    $model->errorDetail[$n++] = null !== $item ? errorDetail::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
