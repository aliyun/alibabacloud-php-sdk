<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagStaticRouteListResponseBody\staticRoutes;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagStaticRouteListResponseBody\taskStates;

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
        'requestId' => 'RequestId',
        'staticRoutes' => 'StaticRoutes',
        'taskStates' => 'TaskStates',
    ];

    public function validate()
    {
        if (\is_array($this->staticRoutes)) {
            Model::validateArray($this->staticRoutes);
        }
        if (\is_array($this->taskStates)) {
            Model::validateArray($this->taskStates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->staticRoutes) {
            if (\is_array($this->staticRoutes)) {
                $res['StaticRoutes'] = [];
                $n1 = 0;
                foreach ($this->staticRoutes as $item1) {
                    $res['StaticRoutes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskStates) {
            if (\is_array($this->taskStates)) {
                $res['TaskStates'] = [];
                $n1 = 0;
                foreach ($this->taskStates as $item1) {
                    $res['TaskStates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['StaticRoutes'])) {
            if (!empty($map['StaticRoutes'])) {
                $model->staticRoutes = [];
                $n1 = 0;
                foreach ($map['StaticRoutes'] as $item1) {
                    $model->staticRoutes[$n1] = staticRoutes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TaskStates'])) {
            if (!empty($map['TaskStates'])) {
                $model->taskStates = [];
                $n1 = 0;
                foreach ($map['TaskStates'] as $item1) {
                    $model->taskStates[$n1] = taskStates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
