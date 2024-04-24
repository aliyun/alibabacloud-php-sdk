<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeTemplateResourceCountResponseBody\resourceCount;
use AlibabaCloud\Tea\Model;

class DescribeTemplateResourceCountResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example B8064433-9781-5E86-806E-C1DD****1D95
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of protected objects or protected object groups for which the protection template takes effect.
     *
     * @var resourceCount[]
     */
    public $resourceCount;
    protected $_name = [
        'requestId'     => 'RequestId',
        'resourceCount' => 'ResourceCount',
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
        if (null !== $this->resourceCount) {
            $res['ResourceCount'] = [];
            if (null !== $this->resourceCount && \is_array($this->resourceCount)) {
                $n = 0;
                foreach ($this->resourceCount as $item) {
                    $res['ResourceCount'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTemplateResourceCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceCount'])) {
            if (!empty($map['ResourceCount'])) {
                $model->resourceCount = [];
                $n                    = 0;
                foreach ($map['ResourceCount'] as $item) {
                    $model->resourceCount[$n++] = null !== $item ? resourceCount::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
