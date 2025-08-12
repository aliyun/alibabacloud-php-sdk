<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class AlertEventIntegrationPolicyForModify extends Model
{
    /**
     * @var string
     */
    public $alertEventIntegrationPolicyName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var FilterSetting
     */
    public $filterSetting;

    /**
     * @var string
     */
    public $integrationSetting;

    /**
     * @var TransformAction[]
     */
    public $transformerSetting;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'alertEventIntegrationPolicyName' => 'alertEventIntegrationPolicyName',
        'description' => 'description',
        'filterSetting' => 'filterSetting',
        'integrationSetting' => 'integrationSetting',
        'transformerSetting' => 'transformerSetting',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->filterSetting) {
            $this->filterSetting->validate();
        }
        if (\is_array($this->transformerSetting)) {
            Model::validateArray($this->transformerSetting);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertEventIntegrationPolicyName) {
            $res['alertEventIntegrationPolicyName'] = $this->alertEventIntegrationPolicyName;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->filterSetting) {
            $res['filterSetting'] = null !== $this->filterSetting ? $this->filterSetting->toArray($noStream) : $this->filterSetting;
        }

        if (null !== $this->integrationSetting) {
            $res['integrationSetting'] = $this->integrationSetting;
        }

        if (null !== $this->transformerSetting) {
            if (\is_array($this->transformerSetting)) {
                $res['transformerSetting'] = [];
                $n1 = 0;
                foreach ($this->transformerSetting as $item1) {
                    $res['transformerSetting'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['alertEventIntegrationPolicyName'])) {
            $model->alertEventIntegrationPolicyName = $map['alertEventIntegrationPolicyName'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['filterSetting'])) {
            $model->filterSetting = FilterSetting::fromMap($map['filterSetting']);
        }

        if (isset($map['integrationSetting'])) {
            $model->integrationSetting = $map['integrationSetting'];
        }

        if (isset($map['transformerSetting'])) {
            if (!empty($map['transformerSetting'])) {
                $model->transformerSetting = [];
                $n1 = 0;
                foreach ($map['transformerSetting'] as $item1) {
                    $model->transformerSetting[$n1] = TransformAction::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
