<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpDubboTranscoder;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpDubboTranscoder\mothedMapList\paramMapsList;

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
        'dubboMothedName' => 'dubboMothedName',
        'httpMothed' => 'httpMothed',
        'mothedpath' => 'mothedpath',
        'paramMapsList' => 'paramMapsList',
        'passThroughAllHeaders' => 'passThroughAllHeaders',
        'passThroughList' => 'passThroughList',
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
            $res['dubboMothedName'] = $this->dubboMothedName;
        }

        if (null !== $this->httpMothed) {
            $res['httpMothed'] = $this->httpMothed;
        }

        if (null !== $this->mothedpath) {
            $res['mothedpath'] = $this->mothedpath;
        }

        if (null !== $this->paramMapsList) {
            if (\is_array($this->paramMapsList)) {
                $res['paramMapsList'] = [];
                $n1 = 0;
                foreach ($this->paramMapsList as $item1) {
                    $res['paramMapsList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->passThroughAllHeaders) {
            $res['passThroughAllHeaders'] = $this->passThroughAllHeaders;
        }

        if (null !== $this->passThroughList) {
            if (\is_array($this->passThroughList)) {
                $res['passThroughList'] = [];
                $n1 = 0;
                foreach ($this->passThroughList as $item1) {
                    $res['passThroughList'][$n1] = $item1;
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
                $n1 = 0;
                foreach ($map['paramMapsList'] as $item1) {
                    $model->paramMapsList[$n1] = paramMapsList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['passThroughAllHeaders'])) {
            $model->passThroughAllHeaders = $map['passThroughAllHeaders'];
        }

        if (isset($map['passThroughList'])) {
            if (!empty($map['passThroughList'])) {
                $model->passThroughList = [];
                $n1 = 0;
                foreach ($map['passThroughList'] as $item1) {
                    $model->passThroughList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
