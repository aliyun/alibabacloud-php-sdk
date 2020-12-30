<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagStaticRouteListResponseBody\staticRoutes;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagStaticRouteListResponseBody\taskStates;
use AlibabaCloud\Tea\Model;

class DescribeSagStaticRouteListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var staticRoutes[]
     */
    public $staticRoutes;

    /**
     * @var taskStates[]
     */
    public $taskStates;
    protected $_name = [
        'requestId'    => 'RequestId',
        'staticRoutes' => 'StaticRoutes',
        'taskStates'   => 'TaskStates',
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
        if (null !== $this->staticRoutes) {
            $res['StaticRoutes'] = [];
            if (null !== $this->staticRoutes && \is_array($this->staticRoutes)) {
                $n = 0;
                foreach ($this->staticRoutes as $item) {
                    $res['StaticRoutes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskStates) {
            $res['TaskStates'] = [];
            if (null !== $this->taskStates && \is_array($this->taskStates)) {
                $n = 0;
                foreach ($this->taskStates as $item) {
                    $res['TaskStates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSagStaticRouteListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StaticRoutes'])) {
            if (!empty($map['StaticRoutes'])) {
                $model->staticRoutes = [];
                $n                   = 0;
                foreach ($map['StaticRoutes'] as $item) {
                    $model->staticRoutes[$n++] = null !== $item ? staticRoutes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TaskStates'])) {
            if (!empty($map['TaskStates'])) {
                $model->taskStates = [];
                $n                 = 0;
                foreach ($map['TaskStates'] as $item) {
                    $model->taskStates[$n++] = null !== $item ? taskStates::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
