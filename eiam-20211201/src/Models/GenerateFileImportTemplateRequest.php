<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class GenerateFileImportTemplateRequest extends Model
{
    /**
     * @var bool
     */
    public $fieldSelectionEnabled;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $selectedFieldNames;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'fieldSelectionEnabled' => 'FieldSelectionEnabled',
        'instanceId' => 'InstanceId',
        'selectedFieldNames' => 'SelectedFieldNames',
        'targetType' => 'TargetType',
    ];

    public function validate()
    {
        if (\is_array($this->selectedFieldNames)) {
            Model::validateArray($this->selectedFieldNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fieldSelectionEnabled) {
            $res['FieldSelectionEnabled'] = $this->fieldSelectionEnabled;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->selectedFieldNames) {
            if (\is_array($this->selectedFieldNames)) {
                $res['SelectedFieldNames'] = [];
                $n1 = 0;
                foreach ($this->selectedFieldNames as $item1) {
                    $res['SelectedFieldNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
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
        if (isset($map['FieldSelectionEnabled'])) {
            $model->fieldSelectionEnabled = $map['FieldSelectionEnabled'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['SelectedFieldNames'])) {
            if (!empty($map['SelectedFieldNames'])) {
                $model->selectedFieldNames = [];
                $n1 = 0;
                foreach ($map['SelectedFieldNames'] as $item1) {
                    $model->selectedFieldNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
