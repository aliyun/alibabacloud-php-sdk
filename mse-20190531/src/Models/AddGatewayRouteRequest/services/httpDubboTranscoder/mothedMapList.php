<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayRouteRequest\services\httpDubboTranscoder;

use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayRouteRequest\services\httpDubboTranscoder\mothedMapList\paramMapsList;
use AlibabaCloud\Tea\Model;

class mothedMapList extends Model
{
    /**
     * @description The method name of the Dubbo service.
     *
     * @example sayHello
     *
     * @var string
     */
    public $dubboMothedName;

    /**
     * @description The HTTP method.
     *
     * > Valid values:
     *
     *   ALL_GET
     *
     *   ALL_POST
     *
     *   ALL_PUT
     *
     *   ALL_DELETE
     *
     *   ALL_PATCH
     *
     * @example ALL_GET
     *
     * @var string
     */
    public $httpMothed;

    /**
     * @description The path that is used to match a method.
     *
     * @example /mytestzbk/sayhello
     *
     * @var string
     */
    public $mothedpath;

    /**
     * @description The information of parameter mappings.
     *
     * @var paramMapsList[]
     */
    public $paramMapsList;

    /**
     * @description The pass-through type of the header.
     *
     * > Valid values:
     *
     *   PASS_ALL: All headers are passed through.
     *
     *   PASS_NOT: All headers are not passed through.
     *
     *   PASS_ASSIGN: Specified headers are passed through.
     *
     * @example PASS_NOT
     *
     * @var string
     */
    public $passThroughAllHeaders;

    /**
     * @description The list of headers to be passed through.
     *
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
