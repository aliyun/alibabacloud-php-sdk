<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateActionPlanRequest\regions;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateActionPlanRequest\resources;

class CreateActionPlanRequest extends Model
{
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
    public $resourceType;

    /**
     * @var resources[]
     */
    public $resources;

    /**
     * @var string
     */
    public $script;
    protected $_name = [
        'actionPlanName' => 'ActionPlanName',
        'allocationSpec' => 'AllocationSpec',
        'appId' => 'AppId',
        'desiredCapacity' => 'DesiredCapacity',
        'intervalMinutes' => 'IntervalMinutes',
        'level' => 'Level',
        'prologScript' => 'PrologScript',
        'regions' => 'Regions',
        'resourceType' => 'ResourceType',
        'resources' => 'Resources',
        'script' => 'Script',
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
        if (null !== $this->actionPlanName) {
            $res['ActionPlanName'] = $this->actionPlanName;
        }

        if (null !== $this->allocationSpec) {
            $res['AllocationSpec'] = $this->allocationSpec;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
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

        if (null !== $this->script) {
            $res['Script'] = $this->script;
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
        if (isset($map['ActionPlanName'])) {
            $model->actionPlanName = $map['ActionPlanName'];
        }

        if (isset($map['AllocationSpec'])) {
            $model->allocationSpec = $map['AllocationSpec'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
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

        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }

        return $model;
    }
}
