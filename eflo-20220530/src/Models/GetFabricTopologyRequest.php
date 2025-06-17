<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Dara\Model;

class GetFabricTopologyRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string[]
     */
    public $lniIds;

    /**
     * @var string[]
     */
    public $nodeIds;

    /**
     * @var string
     */
    public $regionId;

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
        'lniIds' => 'LniIds',
        'nodeIds' => 'NodeIds',
        'regionId' => 'RegionId',
        'vpcId' => 'VpcId',
        'vpdId' => 'VpdId',
    ];

    public function validate()
    {
        if (\is_array($this->lniIds)) {
            Model::validateArray($this->lniIds);
        }
        if (\is_array($this->nodeIds)) {
            Model::validateArray($this->nodeIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->lniIds) {
            if (\is_array($this->lniIds)) {
                $res['LniIds'] = [];
                $n1 = 0;
                foreach ($this->lniIds as $item1) {
                    $res['LniIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nodeIds) {
            if (\is_array($this->nodeIds)) {
                $res['NodeIds'] = [];
                $n1 = 0;
                foreach ($this->nodeIds as $item1) {
                    $res['NodeIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (isset($map['LniIds'])) {
            if (!empty($map['LniIds'])) {
                $model->lniIds = [];
                $n1 = 0;
                foreach ($map['LniIds'] as $item1) {
                    $model->lniIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NodeIds'])) {
            if (!empty($map['NodeIds'])) {
                $model->nodeIds = [];
                $n1 = 0;
                foreach ($map['NodeIds'] as $item1) {
                    $model->nodeIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
