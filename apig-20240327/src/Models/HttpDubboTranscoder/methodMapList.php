<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpDubboTranscoder;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpDubboTranscoder\methodMapList\paramMapsList;

class methodMapList extends Model
{
    /**
     * @var string
     */
    public $dubboMethodName;

    /**
     * @var string
     */
    public $httpMethod;

    /**
     * @var string
     */
    public $methodPath;

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
        'dubboMethodName' => 'dubboMethodName',
        'httpMethod' => 'httpMethod',
        'methodPath' => 'methodPath',
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
        if (null !== $this->dubboMethodName) {
            $res['dubboMethodName'] = $this->dubboMethodName;
        }

        if (null !== $this->httpMethod) {
            $res['httpMethod'] = $this->httpMethod;
        }

        if (null !== $this->methodPath) {
            $res['methodPath'] = $this->methodPath;
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
        if (isset($map['dubboMethodName'])) {
            $model->dubboMethodName = $map['dubboMethodName'];
        }

        if (isset($map['httpMethod'])) {
            $model->httpMethod = $map['httpMethod'];
        }

        if (isset($map['methodPath'])) {
            $model->methodPath = $map['methodPath'];
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
