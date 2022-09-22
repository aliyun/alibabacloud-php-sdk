<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeEcsScenarioFacadeRequest\scenarioList;
use AlibabaCloud\Tea\Model;

class DescribeEcsScenarioFacadeRequest extends Model
{
    /**
     * @var string[]
     */
    public $extMap;

    /**
     * @var string
     */
    public $extParam;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var scenarioList[]
     */
    public $scenarioList;
    protected $_name = [
        'extMap'          => 'ExtMap',
        'extParam'        => 'ExtParam',
        'ownerId'         => 'OwnerId',
        'regionId'        => 'RegionId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'scenarioList'    => 'ScenarioList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extMap) {
            $res['ExtMap'] = $this->extMap;
        }
        if (null !== $this->extParam) {
            $res['ExtParam'] = $this->extParam;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->scenarioList) {
            $res['ScenarioList'] = [];
            if (null !== $this->scenarioList && \is_array($this->scenarioList)) {
                $n = 0;
                foreach ($this->scenarioList as $item) {
                    $res['ScenarioList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEcsScenarioFacadeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtMap'])) {
            $model->extMap = $map['ExtMap'];
        }
        if (isset($map['ExtParam'])) {
            $model->extParam = $map['ExtParam'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ScenarioList'])) {
            if (!empty($map['ScenarioList'])) {
                $model->scenarioList = [];
                $n                   = 0;
                foreach ($map['ScenarioList'] as $item) {
                    $model->scenarioList[$n++] = null !== $item ? scenarioList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
