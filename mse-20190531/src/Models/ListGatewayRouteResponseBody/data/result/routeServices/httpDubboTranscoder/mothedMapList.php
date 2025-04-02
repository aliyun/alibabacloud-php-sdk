<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteResponseBody\data\result\routeServices\httpDubboTranscoder;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteResponseBody\data\result\routeServices\httpDubboTranscoder\mothedMapList\paramMapsList;

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
        'dubboMothedName' => 'DubboMothedName',
        'httpMothed' => 'HttpMothed',
        'mothedpath' => 'Mothedpath',
        'paramMapsList' => 'ParamMapsList',
        'passThroughAllHeaders' => 'PassThroughAllHeaders',
        'passThroughList' => 'PassThroughList',
    ];

    public function validate()
    {
        if (\is_array($this->paramMapsList)) {
            Model::validateArray($this->paramMapsList);
        }
        if (\is_array($this->passThroughList)) {
            Model::validateArray($this->passThroughList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->paramMapsList)) {
                $res['ParamMapsList'] = [];
                $n1 = 0;
                foreach ($this->paramMapsList as $item1) {
                    $res['ParamMapsList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->passThroughAllHeaders) {
            $res['PassThroughAllHeaders'] = $this->passThroughAllHeaders;
        }

        if (null !== $this->passThroughList) {
            if (\is_array($this->passThroughList)) {
                $res['PassThroughList'] = [];
                $n1 = 0;
                foreach ($this->passThroughList as $item1) {
                    $res['PassThroughList'][$n1++] = $item1;
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
                $n1 = 0;
                foreach ($map['ParamMapsList'] as $item1) {
                    $model->paramMapsList[$n1++] = paramMapsList::fromMap($item1);
                }
            }
        }

        if (isset($map['PassThroughAllHeaders'])) {
            $model->passThroughAllHeaders = $map['PassThroughAllHeaders'];
        }

        if (isset($map['PassThroughList'])) {
            if (!empty($map['PassThroughList'])) {
                $model->passThroughList = [];
                $n1 = 0;
                foreach ($map['PassThroughList'] as $item1) {
                    $model->passThroughList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
