<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribePerformanceViewsResponseBody\views;

class DescribePerformanceViewsResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessDeniedDetail;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var views[]
     */
    public $views;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'requestId'          => 'RequestId',
        'views'              => 'Views',
    ];

    public function validate()
    {
        if (\is_array($this->views)) {
            Model::validateArray($this->views);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->views) {
            if (\is_array($this->views)) {
                $res['Views'] = [];
                $n1           = 0;
                foreach ($this->views as $item1) {
                    $res['Views'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Views'])) {
            if (!empty($map['Views'])) {
                $model->views = [];
                $n1           = 0;
                foreach ($map['Views'] as $item1) {
                    $model->views[$n1++] = views::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
