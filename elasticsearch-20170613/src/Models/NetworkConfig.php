<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;

class NetworkConfig extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vsArea;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var WhiteIpGroup[]
     */
    public $whiteIpGroupList;
    protected $_name = [
        'type' => 'type',
        'vpcId' => 'vpcId',
        'vsArea' => 'vsArea',
        'vswitchId' => 'vswitchId',
        'whiteIpGroupList' => 'whiteIpGroupList',
    ];

    public function validate()
    {
        if (\is_array($this->whiteIpGroupList)) {
            Model::validateArray($this->whiteIpGroupList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }

        if (null !== $this->vsArea) {
            $res['vsArea'] = $this->vsArea;
        }

        if (null !== $this->vswitchId) {
            $res['vswitchId'] = $this->vswitchId;
        }

        if (null !== $this->whiteIpGroupList) {
            if (\is_array($this->whiteIpGroupList)) {
                $res['whiteIpGroupList'] = [];
                $n1 = 0;
                foreach ($this->whiteIpGroupList as $item1) {
                    $res['whiteIpGroupList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        if (isset($map['vsArea'])) {
            $model->vsArea = $map['vsArea'];
        }

        if (isset($map['vswitchId'])) {
            $model->vswitchId = $map['vswitchId'];
        }

        if (isset($map['whiteIpGroupList'])) {
            if (!empty($map['whiteIpGroupList'])) {
                $model->whiteIpGroupList = [];
                $n1 = 0;
                foreach ($map['whiteIpGroupList'] as $item1) {
                    $model->whiteIpGroupList[$n1++] = WhiteIpGroup::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
