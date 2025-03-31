<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpDubboTranscoder\mothedMapList;

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
     * @var mothedMapList[]
     */
    public $mothedMapList;
    protected $_name = [
        'dubboServiceGroup' => 'dubboServiceGroup',
        'dubboServiceName' => 'dubboServiceName',
        'dubboServiceVersion' => 'dubboServiceVersion',
        'mothedMapList' => 'mothedMapList',
    ];

    public function validate()
    {
        if (\is_array($this->mothedMapList)) {
            Model::validateArray($this->mothedMapList);
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

        if (null !== $this->mothedMapList) {
            if (\is_array($this->mothedMapList)) {
                $res['mothedMapList'] = [];
                $n1 = 0;
                foreach ($this->mothedMapList as $item1) {
                    $res['mothedMapList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['mothedMapList'])) {
            if (!empty($map['mothedMapList'])) {
                $model->mothedMapList = [];
                $n1 = 0;
                foreach ($map['mothedMapList'] as $item1) {
                    $model->mothedMapList[$n1++] = mothedMapList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
