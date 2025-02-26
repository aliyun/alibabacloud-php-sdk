<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeTemplateResourceCountResponseBody\resourceCount;

class DescribeTemplateResourceCountResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var resourceCount[]
     */
    public $resourceCount;
    protected $_name = [
        'requestId'     => 'RequestId',
        'resourceCount' => 'ResourceCount',
    ];

    public function validate()
    {
        if (\is_array($this->resourceCount)) {
            Model::validateArray($this->resourceCount);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceCount) {
            if (\is_array($this->resourceCount)) {
                $res['ResourceCount'] = [];
                $n1                   = 0;
                foreach ($this->resourceCount as $item1) {
                    $res['ResourceCount'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (isset($map['ResourceCount'])) {
            if (!empty($map['ResourceCount'])) {
                $model->resourceCount = [];
                $n1                   = 0;
                foreach ($map['ResourceCount'] as $item1) {
                    $model->resourceCount[$n1++] = resourceCount::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
