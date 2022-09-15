<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteResponseBody\data\result\routeServices\httpDubboTranscoder;

use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteResponseBody\data\result\routeServices\httpDubboTranscoder\mothedMapList\paramMapsList;
use AlibabaCloud\Tea\Model;

class mothedMapList extends Model
{
    /**
     * @var string
     */
    public $dubboMothedName;

    /**
     * @var string
     */
    public $httpMothed;

    /**
     * @var string
     */
    public $mothedpath;

    /**
     * @var paramMapsList[]
     */
    public $paramMapsList;

    /**
     * @var string
     */
    public $passThroughAllHeaders;

    /**
     * @var string[]
     */
    public $passThroughList;
    protected $_name = [
        'dubboMothedName'       => 'DubboMothedName',
        'httpMothed'            => 'HttpMothed',
        'mothedpath'            => 'Mothedpath',
        'paramMapsList'         => 'ParamMapsList',
        'passThroughAllHeaders' => 'PassThroughAllHeaders',
        'passThroughList'       => 'PassThroughList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dubboMothedName) {
            $res['DubboMothedName'] = $this->dubboMothedName;
        }
        if (null !== $this->httpMothed) {
            $res['HttpMothed'] = $this->httpMothed;
        }
        if (null !== $this->mothedpath) {
            $res['Mothedpath'] = $this->mothedpath;
        }
        if (null !== $this->paramMapsList) {
            $res['ParamMapsList'] = [];
            if (null !== $this->paramMapsList && \is_array($this->paramMapsList)) {
                $n = 0;
                foreach ($this->paramMapsList as $item) {
                    $res['ParamMapsList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->passThroughAllHeaders) {
            $res['PassThroughAllHeaders'] = $this->passThroughAllHeaders;
        }
        if (null !== $this->passThroughList) {
            $res['PassThroughList'] = $this->passThroughList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mothedMapList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DubboMothedName'])) {
            $model->dubboMothedName = $map['DubboMothedName'];
        }
        if (isset($map['HttpMothed'])) {
            $model->httpMothed = $map['HttpMothed'];
        }
        if (isset($map['Mothedpath'])) {
            $model->mothedpath = $map['Mothedpath'];
        }
        if (isset($map['ParamMapsList'])) {
            if (!empty($map['ParamMapsList'])) {
                $model->paramMapsList = [];
                $n                    = 0;
                foreach ($map['ParamMapsList'] as $item) {
                    $model->paramMapsList[$n++] = null !== $item ? paramMapsList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PassThroughAllHeaders'])) {
            $model->passThroughAllHeaders = $map['PassThroughAllHeaders'];
        }
        if (isset($map['PassThroughList'])) {
            if (!empty($map['PassThroughList'])) {
                $model->passThroughList = $map['PassThroughList'];
            }
        }

        return $model;
    }
}
