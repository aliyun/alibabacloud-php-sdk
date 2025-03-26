<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetFabricTopologyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetFabricTopologyResponseBody\content\topoInfo;

class content extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var topoInfo[]
     */
    public $topoInfo;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vpdId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'regionId' => 'RegionId',
        'topoInfo' => 'TopoInfo',
        'vpcId' => 'VpcId',
        'vpdId' => 'VpdId',
    ];

    public function validate()
    {
        if (\is_array($this->topoInfo)) {
            Model::validateArray($this->topoInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->topoInfo) {
            if (\is_array($this->topoInfo)) {
                $res['TopoInfo'] = [];
                $n1 = 0;
                foreach ($this->topoInfo as $item1) {
                    $res['TopoInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['TopoInfo'])) {
            if (!empty($map['TopoInfo'])) {
                $model->topoInfo = [];
                $n1 = 0;
                foreach ($map['TopoInfo'] as $item1) {
                    $model->topoInfo[$n1++] = topoInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }

        return $model;
    }
}
