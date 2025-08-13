<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteRequest\services;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteRequest\services\httpDubboTranscoder\mothedMapList;

class httpDubboTranscoder extends Model
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
        'dubboServiceGroup' => 'DubboServiceGroup',
        'dubboServiceName' => 'DubboServiceName',
        'dubboServiceVersion' => 'DubboServiceVersion',
        'mothedMapList' => 'MothedMapList',
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
            $res['DubboServiceGroup'] = $this->dubboServiceGroup;
        }

        if (null !== $this->dubboServiceName) {
            $res['DubboServiceName'] = $this->dubboServiceName;
        }

        if (null !== $this->dubboServiceVersion) {
            $res['DubboServiceVersion'] = $this->dubboServiceVersion;
        }

        if (null !== $this->mothedMapList) {
            if (\is_array($this->mothedMapList)) {
                $res['MothedMapList'] = [];
                $n1 = 0;
                foreach ($this->mothedMapList as $item1) {
                    $res['MothedMapList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1 = 0;
                foreach ($map['MothedMapList'] as $item1) {
                    $model->mothedMapList[$n1] = mothedMapList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
