<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserEventTrendResponseBody\trend;
use AlibabaCloud\Tea\Model;

class DescribeUserEventTrendResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example F51E6DD6-B2D2-57C9-90F1-FAFD0A19DE00
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The trends of attacks.
     *
     * @var trend[]
     */
    public $trend;
    protected $_name = [
        'requestId' => 'RequestId',
        'trend'     => 'Trend',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->trend) {
            $res['Trend'] = [];
            if (null !== $this->trend && \is_array($this->trend)) {
                $n = 0;
                foreach ($this->trend as $item) {
                    $res['Trend'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserEventTrendResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Trend'])) {
            if (!empty($map['Trend'])) {
                $model->trend = [];
                $n            = 0;
                foreach ($map['Trend'] as $item) {
                    $model->trend[$n++] = null !== $item ? trend::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
