<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpDubboTranscoder;

use AlibabaCloud\SDK\APIG\V20240327\Models\HttpDubboTranscoder\mothedMapList\paramMapsList;
use AlibabaCloud\Tea\Model;

class mothedMapList extends Model
{
    /**
     * @var string
     */
    public $dubboMothedName;

    /**
     * @example ALL_GET
     *
     * @var string
     */
    public $httpMothed;

    /**
     * @example /mytestzbk/sayhello
     *
     * @var string
     */
    public $mothedpath;

    /**
     * @var paramMapsList[]
     */
    public $paramMapsList;

    /**
     * @example PASS_NOT
     *
     * @var string
     */
    public $passThroughAllHeaders;

    /**
     * @var string[]
     */
    public $passThroughList;
    protected $_name = [
        'dubboMothedName'       => 'dubboMothedName',
        'httpMothed'            => 'httpMothed',
        'mothedpath'            => 'mothedpath',
        'paramMapsList'         => 'paramMapsList',
        'passThroughAllHeaders' => 'passThroughAllHeaders',
        'passThroughList'       => 'passThroughList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dubboMothedName) {
            $res['dubboMothedName'] = $this->dubboMothedName;
        }
        if (null !== $this->httpMothed) {
            $res['httpMothed'] = $this->httpMothed;
        }
        if (null !== $this->mothedpath) {
            $res['mothedpath'] = $this->mothedpath;
        }
        if (null !== $this->paramMapsList) {
            $res['paramMapsList'] = [];
            if (null !== $this->paramMapsList && \is_array($this->paramMapsList)) {
                $n = 0;
                foreach ($this->paramMapsList as $item) {
                    $res['paramMapsList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->passThroughAllHeaders) {
            $res['passThroughAllHeaders'] = $this->passThroughAllHeaders;
        }
        if (null !== $this->passThroughList) {
            $res['passThroughList'] = $this->passThroughList;
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
        if (isset($map['dubboMothedName'])) {
            $model->dubboMothedName = $map['dubboMothedName'];
        }
        if (isset($map['httpMothed'])) {
            $model->httpMothed = $map['httpMothed'];
        }
        if (isset($map['mothedpath'])) {
            $model->mothedpath = $map['mothedpath'];
        }
        if (isset($map['paramMapsList'])) {
            if (!empty($map['paramMapsList'])) {
                $model->paramMapsList = [];
                $n                    = 0;
                foreach ($map['paramMapsList'] as $item) {
                    $model->paramMapsList[$n++] = null !== $item ? paramMapsList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['passThroughAllHeaders'])) {
            $model->passThroughAllHeaders = $map['passThroughAllHeaders'];
        }
        if (isset($map['passThroughList'])) {
            if (!empty($map['passThroughList'])) {
                $model->passThroughList = $map['passThroughList'];
            }
        }

        return $model;
    }
}
