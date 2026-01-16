<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\NetworkConfig\loadBalanceConfig;

class NetworkConfig extends Model
{
    /**
     * @var int
     */
    public $lbReplica;

    /**
     * @var loadBalanceConfig[]
     */
    public $loadBalanceConfig;

    /**
     * @var string
     */
    public $loadBalanceType;

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
        'lbReplica' => 'lbReplica',
        'loadBalanceConfig' => 'loadBalanceConfig',
        'loadBalanceType' => 'loadBalanceType',
        'type' => 'type',
        'vpcId' => 'vpcId',
        'vsArea' => 'vsArea',
        'vswitchId' => 'vswitchId',
        'whiteIpGroupList' => 'whiteIpGroupList',
    ];

    public function validate()
    {
        if (\is_array($this->loadBalanceConfig)) {
            Model::validateArray($this->loadBalanceConfig);
        }
        if (\is_array($this->whiteIpGroupList)) {
            Model::validateArray($this->whiteIpGroupList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lbReplica) {
            $res['lbReplica'] = $this->lbReplica;
        }

        if (null !== $this->loadBalanceConfig) {
            if (\is_array($this->loadBalanceConfig)) {
                $res['loadBalanceConfig'] = [];
                $n1 = 0;
                foreach ($this->loadBalanceConfig as $item1) {
                    $res['loadBalanceConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->loadBalanceType) {
            $res['loadBalanceType'] = $this->loadBalanceType;
        }

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
                    $res['whiteIpGroupList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['lbReplica'])) {
            $model->lbReplica = $map['lbReplica'];
        }

        if (isset($map['loadBalanceConfig'])) {
            if (!empty($map['loadBalanceConfig'])) {
                $model->loadBalanceConfig = [];
                $n1 = 0;
                foreach ($map['loadBalanceConfig'] as $item1) {
                    $model->loadBalanceConfig[$n1] = loadBalanceConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['loadBalanceType'])) {
            $model->loadBalanceType = $map['loadBalanceType'];
        }

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
                    $model->whiteIpGroupList[$n1] = WhiteIpGroup::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
