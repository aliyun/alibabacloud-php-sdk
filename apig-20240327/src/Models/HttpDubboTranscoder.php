<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpDubboTranscoder\methodMapList;

class HttpDubboTranscoder extends Model
{
    /**
     * @var string
     */
    public $dubboServiceGroup;

    /**
     * @var string
     */
    public $dubboServiceName;

    /**
     * @var string
     */
    public $dubboServiceVersion;

    /**
     * @var methodMapList[]
     */
    public $methodMapList;
    protected $_name = [
        'dubboServiceGroup' => 'dubboServiceGroup',
        'dubboServiceName' => 'dubboServiceName',
        'dubboServiceVersion' => 'dubboServiceVersion',
        'methodMapList' => 'methodMapList',
    ];

    public function validate()
    {
        if (\is_array($this->methodMapList)) {
            Model::validateArray($this->methodMapList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dubboServiceGroup) {
            $res['dubboServiceGroup'] = $this->dubboServiceGroup;
        }

        if (null !== $this->dubboServiceName) {
            $res['dubboServiceName'] = $this->dubboServiceName;
        }

        if (null !== $this->dubboServiceVersion) {
            $res['dubboServiceVersion'] = $this->dubboServiceVersion;
        }

        if (null !== $this->methodMapList) {
            if (\is_array($this->methodMapList)) {
                $res['methodMapList'] = [];
                $n1 = 0;
                foreach ($this->methodMapList as $item1) {
                    $res['methodMapList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['dubboServiceGroup'])) {
            $model->dubboServiceGroup = $map['dubboServiceGroup'];
        }

        if (isset($map['dubboServiceName'])) {
            $model->dubboServiceName = $map['dubboServiceName'];
        }

        if (isset($map['dubboServiceVersion'])) {
            $model->dubboServiceVersion = $map['dubboServiceVersion'];
        }

        if (isset($map['methodMapList'])) {
            if (!empty($map['methodMapList'])) {
                $model->methodMapList = [];
                $n1 = 0;
                foreach ($map['methodMapList'] as $item1) {
                    $model->methodMapList[$n1] = methodMapList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
