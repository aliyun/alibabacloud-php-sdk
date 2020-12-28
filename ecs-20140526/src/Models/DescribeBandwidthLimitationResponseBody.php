<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthLimitationResponseBody\bandwidths;
use AlibabaCloud\Tea\Model;

class DescribeBandwidthLimitationResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bandwidths[]
     */
    public $bandwidths;
    protected $_name = [
        'requestId'  => 'RequestId',
        'bandwidths' => 'Bandwidths',
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
        if (null !== $this->bandwidths) {
            $res['Bandwidths'] = [];
            if (null !== $this->bandwidths && \is_array($this->bandwidths)) {
                $n = 0;
                foreach ($this->bandwidths as $item) {
                    $res['Bandwidths'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBandwidthLimitationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Bandwidths'])) {
            if (!empty($map['Bandwidths'])) {
                $model->bandwidths = [];
                $n                 = 0;
                foreach ($map['Bandwidths'] as $item) {
                    $model->bandwidths[$n++] = null !== $item ? bandwidths::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
