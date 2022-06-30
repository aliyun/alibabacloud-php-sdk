<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSystemLogResponseBody\systemLog;
use AlibabaCloud\Tea\Model;

class DescribeSystemLogResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var systemLog[]
     */
    public $systemLog;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'requestId' => 'RequestId',
        'systemLog' => 'SystemLog',
        'total'     => 'Total',
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
        if (null !== $this->systemLog) {
            $res['SystemLog'] = [];
            if (null !== $this->systemLog && \is_array($this->systemLog)) {
                $n = 0;
                foreach ($this->systemLog as $item) {
                    $res['SystemLog'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSystemLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SystemLog'])) {
            if (!empty($map['SystemLog'])) {
                $model->systemLog = [];
                $n                = 0;
                foreach ($map['SystemLog'] as $item) {
                    $model->systemLog[$n++] = null !== $item ? systemLog::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
