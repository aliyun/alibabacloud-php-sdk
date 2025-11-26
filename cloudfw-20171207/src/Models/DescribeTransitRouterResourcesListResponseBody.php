<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTransitRouterResourcesListResponseBody\transitRouterAttachedResources;

class DescribeTransitRouterResourcesListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var transitRouterAttachedResources[]
     */
    public $transitRouterAttachedResources;
    protected $_name = [
        'requestId' => 'RequestId',
        'transitRouterAttachedResources' => 'TransitRouterAttachedResources',
    ];

    public function validate()
    {
        if (\is_array($this->transitRouterAttachedResources)) {
            Model::validateArray($this->transitRouterAttachedResources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->transitRouterAttachedResources) {
            if (\is_array($this->transitRouterAttachedResources)) {
                $res['TransitRouterAttachedResources'] = [];
                $n1 = 0;
                foreach ($this->transitRouterAttachedResources as $item1) {
                    $res['TransitRouterAttachedResources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (isset($map['TransitRouterAttachedResources'])) {
            if (!empty($map['TransitRouterAttachedResources'])) {
                $model->transitRouterAttachedResources = [];
                $n1 = 0;
                foreach ($map['TransitRouterAttachedResources'] as $item1) {
                    $model->transitRouterAttachedResources[$n1] = transitRouterAttachedResources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
