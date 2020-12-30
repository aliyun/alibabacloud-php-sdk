<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagGlobalRouteProtocolResponseBody\taskStates;
use AlibabaCloud\Tea\Model;

class DescribeSagGlobalRouteProtocolResponseBody extends Model
{
    /**
     * @var string
     */
    public $routeProtocol;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var taskStates[]
     */
    public $taskStates;
    protected $_name = [
        'routeProtocol' => 'RouteProtocol',
        'requestId'     => 'RequestId',
        'taskStates'    => 'TaskStates',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routeProtocol) {
            $res['RouteProtocol'] = $this->routeProtocol;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return DescribeSagGlobalRouteProtocolResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RouteProtocol'])) {
            $model->routeProtocol = $map['RouteProtocol'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
