<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

class AlertEventIntegrationPolicyForModify extends Model
{
    /**
     * @description This parameter is required.
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertEventIntegrationPolicyName) {
            $res['alertEventIntegrationPolicyName'] = $this->alertEventIntegrationPolicyName;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->filterSetting) {
            $res['filterSetting'] = null !== $this->filterSetting ? $this->filterSetting->toMap() : null;
        }
        if (null !== $this->integrationSetting) {
            $res['integrationSetting'] = $this->integrationSetting;
        }
        if (null !== $this->transformerSetting) {
            $res['transformerSetting'] = [];
            if (null !== $this->transformerSetting && \is_array($this->transformerSetting)) {
                $n = 0;
                foreach ($this->transformerSetting as $item) {
                    $res['transformerSetting'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AlertEventIntegrationPolicyForModify
     */
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
                $n = 0;
                foreach ($map['transformerSetting'] as $item) {
                    $model->transformerSetting[$n++] = null !== $item ? TransformAction::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
