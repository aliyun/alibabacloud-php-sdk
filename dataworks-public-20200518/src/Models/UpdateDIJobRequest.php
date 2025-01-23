<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateDIJobRequest\jobSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateDIJobRequest\resourceSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateDIJobRequest\tableMappings;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateDIJobRequest\transformationRules;

class UpdateDIJobRequest extends Model
{
    /**
     * @var int
     */
    public $DIJobId;
    /**
     * @var string
     */
    public $description;
    /**
     * @var jobSettings
     */
    public $jobSettings;
    /**
     * @var resourceSettings
     */
    public $resourceSettings;
    /**
     * @var tableMappings[]
     */
    public $tableMappings;
    /**
     * @var transformationRules[]
     */
    public $transformationRules;
    protected $_name = [
        'DIJobId'             => 'DIJobId',
        'description'         => 'Description',
        'jobSettings'         => 'JobSettings',
        'resourceSettings'    => 'ResourceSettings',
        'tableMappings'       => 'TableMappings',
        'transformationRules' => 'TransformationRules',
    ];

    public function validate()
    {
        if (null !== $this->jobSettings) {
            $this->jobSettings->validate();
        }
        if (null !== $this->resourceSettings) {
            $this->resourceSettings->validate();
        }
        if (\is_array($this->tableMappings)) {
            Model::validateArray($this->tableMappings);
        }
        if (\is_array($this->transformationRules)) {
            Model::validateArray($this->transformationRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DIJobId) {
            $res['DIJobId'] = $this->DIJobId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->jobSettings) {
            $res['JobSettings'] = null !== $this->jobSettings ? $this->jobSettings->toArray($noStream) : $this->jobSettings;
        }

        if (null !== $this->resourceSettings) {
            $res['ResourceSettings'] = null !== $this->resourceSettings ? $this->resourceSettings->toArray($noStream) : $this->resourceSettings;
        }

        if (null !== $this->tableMappings) {
            if (\is_array($this->tableMappings)) {
                $res['TableMappings'] = [];
                $n1                   = 0;
                foreach ($this->tableMappings as $item1) {
                    $res['TableMappings'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->transformationRules) {
            if (\is_array($this->transformationRules)) {
                $res['TransformationRules'] = [];
                $n1                         = 0;
                foreach ($this->transformationRules as $item1) {
                    $res['TransformationRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DIJobId'])) {
            $model->DIJobId = $map['DIJobId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['JobSettings'])) {
            $model->jobSettings = jobSettings::fromMap($map['JobSettings']);
        }

        if (isset($map['ResourceSettings'])) {
            $model->resourceSettings = resourceSettings::fromMap($map['ResourceSettings']);
        }

        if (isset($map['TableMappings'])) {
            if (!empty($map['TableMappings'])) {
                $model->tableMappings = [];
                $n1                   = 0;
                foreach ($map['TableMappings'] as $item1) {
                    $model->tableMappings[$n1++] = tableMappings::fromMap($item1);
                }
            }
        }

        if (isset($map['TransformationRules'])) {
            if (!empty($map['TransformationRules'])) {
                $model->transformationRules = [];
                $n1                         = 0;
                foreach ($map['TransformationRules'] as $item1) {
                    $model->transformationRules[$n1++] = transformationRules::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
