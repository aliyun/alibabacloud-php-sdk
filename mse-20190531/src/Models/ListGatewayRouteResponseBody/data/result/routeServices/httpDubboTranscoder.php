<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteResponseBody\data\result\routeServices;

use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteResponseBody\data\result\routeServices\httpDubboTranscoder\mothedMapList;
use AlibabaCloud\Tea\Model;

class httpDubboTranscoder extends Model
{
    /**
     * @var string
     */
    public $dubboServiceName;

    /**
     * @var string
     */
    public $dubboServiceVersion;

    /**
     * @var mothedMapList[]
     */
    public $mothedMapList;
    protected $_name = [
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
