<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteRequest\services;

use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteRequest\services\httpDubboTranscoder\mothedMapList;
use AlibabaCloud\Tea\Model;

class httpDubboTranscoder extends Model
{
    /**
     * @description The Dubbo service group.
     *
     * @example service name
     *
     * @var string
     */
    public $dubboServiceGroup;

    /**
     * @description The name of the Dubbo service.
     *
     * @example org.apache.dubbo.samples.basic.api.DemoService
     *
     * @var string
     */
    public $dubboServiceName;

    /**
     * @description The version of the Dubbo service.
     *
     * @example 0.0.0
     *
     * @var string
     */
    public $dubboServiceVersion;

    /**
     * @description The forwarding rules of the Dubbo service.
     *
     * @var mothedMapList[]
     */
    public $mothedMapList;
    protected $_name = [
        'dubboServiceGroup'   => 'DubboServiceGroup',
        'dubboServiceName'    => 'DubboServiceName',
        'dubboServiceVersion' => 'DubboServiceVersion',
        'mothedMapList'       => 'MothedMapList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dubboServiceGroup) {
            $res['DubboServiceGroup'] = $this->dubboServiceGroup;
        }
        if (null !== $this->dubboServiceName) {
            $res['DubboServiceName'] = $this->dubboServiceName;
        }
        if (null !== $this->dubboServiceVersion) {
            $res['DubboServiceVersion'] = $this->dubboServiceVersion;
        }
        if (null !== $this->mothedMapList) {
            $res['MothedMapList'] = [];
            if (null !== $this->mothedMapList && \is_array($this->mothedMapList)) {
                $n = 0;
                foreach ($this->mothedMapList as $item) {
                    $res['MothedMapList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return httpDubboTranscoder
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DubboServiceGroup'])) {
            $model->dubboServiceGroup = $map['DubboServiceGroup'];
        }
        if (isset($map['DubboServiceName'])) {
            $model->dubboServiceName = $map['DubboServiceName'];
        }
        if (isset($map['DubboServiceVersion'])) {
            $model->dubboServiceVersion = $map['DubboServiceVersion'];
        }
        if (isset($map['MothedMapList'])) {
            if (!empty($map['MothedMapList'])) {
                $model->mothedMapList = [];
                $n                    = 0;
                foreach ($map['MothedMapList'] as $item) {
                    $model->mothedMapList[$n++] = null !== $item ? mothedMapList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
