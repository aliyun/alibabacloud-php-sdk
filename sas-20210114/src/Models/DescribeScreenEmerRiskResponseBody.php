<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models;

use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenEmerRiskResponseBody\cloudHcRiskItems;
use AlibabaCloud\Tea\Model;

class DescribeScreenEmerRiskResponseBody extends Model
{
    /**
     * @var cloudHcRiskItems[]
     */
    public $cloudHcRiskItems;

    /**
     * @example 23AD0BD2-8771-5647-819E-6xxxxxxxx
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cloudHcRiskItems' => 'CloudHcRiskItems',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudHcRiskItems) {
            $res['CloudHcRiskItems'] = [];
            if (null !== $this->cloudHcRiskItems && \is_array($this->cloudHcRiskItems)) {
                $n = 0;
                foreach ($this->cloudHcRiskItems as $item) {
                    $res['CloudHcRiskItems'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeScreenEmerRiskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudHcRiskItems'])) {
            if (!empty($map['CloudHcRiskItems'])) {
                $model->cloudHcRiskItems = [];
                $n = 0;
                foreach ($map['CloudHcRiskItems'] as $item) {
                    $model->cloudHcRiskItems[$n++] = null !== $item ? cloudHcRiskItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
