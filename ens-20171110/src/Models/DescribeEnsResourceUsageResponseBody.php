<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsResourceUsageResponseBody\ensResourceUsage;
use AlibabaCloud\Tea\Model;

class DescribeEnsResourceUsageResponseBody extends Model
{
    /**
     * @var ensResourceUsage[]
     */
    public $ensResourceUsage;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ensResourceUsage' => 'EnsResourceUsage',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ensResourceUsage) {
            $res['EnsResourceUsage'] = [];
            if (null !== $this->ensResourceUsage && \is_array($this->ensResourceUsage)) {
                $n = 0;
                foreach ($this->ensResourceUsage as $item) {
                    $res['EnsResourceUsage'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeEnsResourceUsageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnsResourceUsage'])) {
            if (!empty($map['EnsResourceUsage'])) {
                $model->ensResourceUsage = [];
                $n                       = 0;
                foreach ($map['EnsResourceUsage'] as $item) {
                    $model->ensResourceUsage[$n++] = null !== $item ? ensResourceUsage::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
