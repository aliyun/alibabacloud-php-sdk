<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateGroupRequest\notifyConfig;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateGroupRequest\triggerConfig;

class UpdateGroupRequest extends Model
{
    /**
     * @var bool
     */
    public $autoDestroy;

    /**
     * @var bool
     */
    public $autoTrigger;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $forcedSetting;

    /**
     * @var string
     */
    public $name;

    /**
     * @var notifyConfig[]
     */
    public $notifyConfig;

    /**
     * @var string[]
     */
    public $notifyOperationTypes;

    /**
     * @var string
     */
    public $ramRole;

    /**
     * @var string[]
     */
    public $reportExportField;

    /**
     * @var string
     */
    public $reportExportPath;

    /**
     * @var string
     */
    public $terraformProviderVersion;

    /**
     * @var triggerConfig[]
     */
    public $triggerConfig;

    /**
     * @var string[]
     */
    public $triggerResourceType;
    protected $_name = [
        'autoDestroy' => 'autoDestroy',
        'autoTrigger' => 'autoTrigger',
        'clientToken' => 'clientToken',
        'description' => 'description',
        'forcedSetting' => 'forcedSetting',
        'name' => 'name',
        'notifyConfig' => 'notifyConfig',
        'notifyOperationTypes' => 'notifyOperationTypes',
        'ramRole' => 'ramRole',
        'reportExportField' => 'reportExportField',
        'reportExportPath' => 'reportExportPath',
        'terraformProviderVersion' => 'terraformProviderVersion',
        'triggerConfig' => 'triggerConfig',
        'triggerResourceType' => 'triggerResourceType',
    ];

    public function validate()
    {
        if (\is_array($this->notifyConfig)) {
            Model::validateArray($this->notifyConfig);
        }
        if (\is_array($this->notifyOperationTypes)) {
            Model::validateArray($this->notifyOperationTypes);
        }
        if (\is_array($this->reportExportField)) {
            Model::validateArray($this->reportExportField);
        }
        if (\is_array($this->triggerConfig)) {
            Model::validateArray($this->triggerConfig);
        }
        if (\is_array($this->triggerResourceType)) {
            Model::validateArray($this->triggerResourceType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoDestroy) {
            $res['autoDestroy'] = $this->autoDestroy;
        }

        if (null !== $this->autoTrigger) {
            $res['autoTrigger'] = $this->autoTrigger;
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->forcedSetting) {
            $res['forcedSetting'] = $this->forcedSetting;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->notifyConfig) {
            if (\is_array($this->notifyConfig)) {
                $res['notifyConfig'] = [];
                $n1 = 0;
                foreach ($this->notifyConfig as $item1) {
                    $res['notifyConfig'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->notifyOperationTypes) {
            if (\is_array($this->notifyOperationTypes)) {
                $res['notifyOperationTypes'] = [];
                $n1 = 0;
                foreach ($this->notifyOperationTypes as $item1) {
                    $res['notifyOperationTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ramRole) {
            $res['ramRole'] = $this->ramRole;
        }

        if (null !== $this->reportExportField) {
            if (\is_array($this->reportExportField)) {
                $res['reportExportField'] = [];
                $n1 = 0;
                foreach ($this->reportExportField as $item1) {
                    $res['reportExportField'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->reportExportPath) {
            $res['reportExportPath'] = $this->reportExportPath;
        }

        if (null !== $this->terraformProviderVersion) {
            $res['terraformProviderVersion'] = $this->terraformProviderVersion;
        }

        if (null !== $this->triggerConfig) {
            if (\is_array($this->triggerConfig)) {
                $res['triggerConfig'] = [];
                $n1 = 0;
                foreach ($this->triggerConfig as $item1) {
                    $res['triggerConfig'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->triggerResourceType) {
            if (\is_array($this->triggerResourceType)) {
                $res['triggerResourceType'] = [];
                $n1 = 0;
                foreach ($this->triggerResourceType as $item1) {
                    $res['triggerResourceType'][$n1++] = $item1;
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
        if (isset($map['autoDestroy'])) {
            $model->autoDestroy = $map['autoDestroy'];
        }

        if (isset($map['autoTrigger'])) {
            $model->autoTrigger = $map['autoTrigger'];
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['forcedSetting'])) {
            $model->forcedSetting = $map['forcedSetting'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['notifyConfig'])) {
            if (!empty($map['notifyConfig'])) {
                $model->notifyConfig = [];
                $n1 = 0;
                foreach ($map['notifyConfig'] as $item1) {
                    $model->notifyConfig[$n1++] = notifyConfig::fromMap($item1);
                }
            }
        }

        if (isset($map['notifyOperationTypes'])) {
            if (!empty($map['notifyOperationTypes'])) {
                $model->notifyOperationTypes = [];
                $n1 = 0;
                foreach ($map['notifyOperationTypes'] as $item1) {
                    $model->notifyOperationTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ramRole'])) {
            $model->ramRole = $map['ramRole'];
        }

        if (isset($map['reportExportField'])) {
            if (!empty($map['reportExportField'])) {
                $model->reportExportField = [];
                $n1 = 0;
                foreach ($map['reportExportField'] as $item1) {
                    $model->reportExportField[$n1++] = $item1;
                }
            }
        }

        if (isset($map['reportExportPath'])) {
            $model->reportExportPath = $map['reportExportPath'];
        }

        if (isset($map['terraformProviderVersion'])) {
            $model->terraformProviderVersion = $map['terraformProviderVersion'];
        }

        if (isset($map['triggerConfig'])) {
            if (!empty($map['triggerConfig'])) {
                $model->triggerConfig = [];
                $n1 = 0;
                foreach ($map['triggerConfig'] as $item1) {
                    $model->triggerConfig[$n1++] = triggerConfig::fromMap($item1);
                }
            }
        }

        if (isset($map['triggerResourceType'])) {
            if (!empty($map['triggerResourceType'])) {
                $model->triggerResourceType = [];
                $n1 = 0;
                foreach ($map['triggerResourceType'] as $item1) {
                    $model->triggerResourceType[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
