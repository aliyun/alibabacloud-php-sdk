<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSystemLogResponseBody\systemLog;

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
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->systemLog)) {
            Model::validateArray($this->systemLog);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->systemLog) {
            if (\is_array($this->systemLog)) {
                $res['SystemLog'] = [];
                $n1 = 0;
                foreach ($this->systemLog as $item1) {
                    $res['SystemLog'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SystemLog'])) {
            if (!empty($map['SystemLog'])) {
                $model->systemLog = [];
                $n1 = 0;
                foreach ($map['SystemLog'] as $item1) {
                    $model->systemLog[$n1] = systemLog::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
