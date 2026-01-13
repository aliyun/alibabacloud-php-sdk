<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Dara\Model;

class CreateActionPlanShrinkRequest extends Model
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
     * @var string
     */
    public $regionsShrink;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $resourcesShrink;

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
        'regionsShrink' => 'Regions',
        'resourceType' => 'ResourceType',
        'resourcesShrink' => 'Resources',
        'script' => 'Script',
    ];

    public function validate()
    {
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

        if (null !== $this->regionsShrink) {
            $res['Regions'] = $this->regionsShrink;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->resourcesShrink) {
            $res['Resources'] = $this->resourcesShrink;
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
            $model->regionsShrink = $map['Regions'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['Resources'])) {
            $model->resourcesShrink = $map['Resources'];
        }

        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }

        return $model;
    }
}
