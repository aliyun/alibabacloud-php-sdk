<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPrivateAccessApplicationsForDynamicRouteResponseBody\dynamicRoutes;

class ListPrivateAccessApplicationsForDynamicRouteResponseBody extends Model
{
    /**
     * @var dynamicRoutes[]
     */
    public $dynamicRoutes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dynamicRoutes' => 'DynamicRoutes',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->dynamicRoutes)) {
            Model::validateArray($this->dynamicRoutes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dynamicRoutes) {
            if (\is_array($this->dynamicRoutes)) {
                $res['DynamicRoutes'] = [];
                $n1 = 0;
                foreach ($this->dynamicRoutes as $item1) {
                    $res['DynamicRoutes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DynamicRoutes'])) {
            if (!empty($map['DynamicRoutes'])) {
                $model->dynamicRoutes = [];
                $n1 = 0;
                foreach ($map['DynamicRoutes'] as $item1) {
                    $model->dynamicRoutes[$n1] = dynamicRoutes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
