<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetActionPlanResponseBody\regions;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetActionPlanResponseBody\resources;

class GetActionPlanResponseBody extends Model
{
    /**
     * @var string
     */
    public $actionPlanId;

    /**
     * @var string
     */
    public $actionPlanName;

    /**
     * @var string
     */
    public $allocationSpec;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var float
     */
    public $desiredCapacity;

    /**
     * @var int
     */
    public $intervalMinutes;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $prologScript;

    /**
     * @var regions[]
     */
    public $regions;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var resources[]
     */
    public $resources;

    /**
     * @var string
     */
    public $status;

    /**
     * @var float
     */
    public $totalCapacity;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'actionPlanId' => 'ActionPlanId',
        'actionPlanName' => 'ActionPlanName',
        'allocationSpec' => 'AllocationSpec',
        'appId' => 'AppId',
        'createTime' => 'CreateTime',
        'desiredCapacity' => 'DesiredCapacity',
        'intervalMinutes' => 'IntervalMinutes',
        'level' => 'Level',
        'prologScript' => 'PrologScript',
        'regions' => 'Regions',
        'requestId' => 'RequestId',
        'resourceType' => 'ResourceType',
        'resources' => 'Resources',
        'status' => 'Status',
        'totalCapacity' => 'TotalCapacity',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->regions)) {
            Model::validateArray($this->regions);
        }
        if (\is_array($this->resources)) {
            Model::validateArray($this->resources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionPlanId) {
            $res['ActionPlanId'] = $this->actionPlanId;
        }

        if (null !== $this->actionPlanName) {
            $res['ActionPlanName'] = $this->actionPlanName;
        }

        if (null !== $this->allocationSpec) {
            $res['AllocationSpec'] = $this->allocationSpec;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->desiredCapacity) {
            $res['DesiredCapacity'] = $this->desiredCapacity;
        }

        if (null !== $this->intervalMinutes) {
            $res['IntervalMinutes'] = $this->intervalMinutes;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->prologScript) {
            $res['PrologScript'] = $this->prologScript;
        }

        if (null !== $this->regions) {
            if (\is_array($this->regions)) {
                $res['Regions'] = [];
                $n1 = 0;
                foreach ($this->regions as $item1) {
                    $res['Regions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->resources) {
            if (\is_array($this->resources)) {
                $res['Resources'] = [];
                $n1 = 0;
                foreach ($this->resources as $item1) {
                    $res['Resources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->totalCapacity) {
            $res['TotalCapacity'] = $this->totalCapacity;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['ActionPlanId'])) {
            $model->actionPlanId = $map['ActionPlanId'];
        }

        if (isset($map['ActionPlanName'])) {
            $model->actionPlanName = $map['ActionPlanName'];
        }

        if (isset($map['AllocationSpec'])) {
            $model->allocationSpec = $map['AllocationSpec'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DesiredCapacity'])) {
            $model->desiredCapacity = $map['DesiredCapacity'];
        }

        if (isset($map['IntervalMinutes'])) {
            $model->intervalMinutes = $map['IntervalMinutes'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['PrologScript'])) {
            $model->prologScript = $map['PrologScript'];
        }

        if (isset($map['Regions'])) {
            if (!empty($map['Regions'])) {
                $model->regions = [];
                $n1 = 0;
                foreach ($map['Regions'] as $item1) {
                    $model->regions[$n1] = regions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n1 = 0;
                foreach ($map['Resources'] as $item1) {
                    $model->resources[$n1] = resources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TotalCapacity'])) {
            $model->totalCapacity = $map['TotalCapacity'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
