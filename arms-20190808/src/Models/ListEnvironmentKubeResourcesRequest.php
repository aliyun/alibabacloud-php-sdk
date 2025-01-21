<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class ListEnvironmentKubeResourcesRequest extends Model
{
    /**
     * @var string
     */
    public $environmentId;
    /**
     * @var string
     */
    public $kind;
    /**
     * @var string[]
     */
    public $labelSelectors;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'environmentId'  => 'EnvironmentId',
        'kind'           => 'Kind',
        'labelSelectors' => 'LabelSelectors',
        'namespace'      => 'Namespace',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->labelSelectors)) {
            Model::validateArray($this->labelSelectors);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }

        if (null !== $this->kind) {
            $res['Kind'] = $this->kind;
        }

        if (null !== $this->labelSelectors) {
            if (\is_array($this->labelSelectors)) {
                $res['LabelSelectors'] = [];
                foreach ($this->labelSelectors as $key1 => $value1) {
                    $res['LabelSelectors'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }

        if (isset($map['Kind'])) {
            $model->kind = $map['Kind'];
        }

        if (isset($map['LabelSelectors'])) {
            if (!empty($map['LabelSelectors'])) {
                $model->labelSelectors = [];
                foreach ($map['LabelSelectors'] as $key1 => $value1) {
                    $model->labelSelectors[$key1] = $value1;
                }
            }
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
