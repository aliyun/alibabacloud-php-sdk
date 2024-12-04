<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDIJobRequest\jobSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDIJobRequest\resourceSettings;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDIJobRequest\tableMappings;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDIJobRequest\transformationRules;
use AlibabaCloud\Tea\Model;

class UpdateDIJobRequest extends Model
{
    /**
     * @description The ID of the synchronization task.
     *
     * This parameter is required.
     * @example 11588
     *
     * @var int
     */
    public $DIJobId;

    /**
     * @description The description of the synchronization task.
     *
     * @var string
     */
    public $description;

    /**
     * @description The settings for the dimension of the synchronization task. The settings include processing policies for DDL messages, policies for data type mappings between source fields and destination fields, and runtime parameters of the synchronization task.
     *
     * @var jobSettings
     */
    public $jobSettings;

    /**
     * @description DataWorks工作空间ID。您可以通过[ListProjects](https://help.aliyun.com/document_detail/178393.html)接口获取工作空间ID。
     *
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The resource settings.
     *
     * @var resourceSettings
     */
    public $resourceSettings;

    /**
     * @description The list of mappings between rules used to select synchronization objects in the source and transformation rules applied to the selected synchronization objects. Each entry in the list displays a mapping between a rule used to select synchronization objects and a transformation rule applied to the selected synchronization objects.
     *
     * @var tableMappings[]
     */
    public $tableMappings;

    /**
     * @description The list of transformation rules for objects involved in the synchronization task. Each entry in the list defines a transformation rule.
     *
     * @var transformationRules[]
     */
    public $transformationRules;
    protected $_name = [
        'DIJobId'             => 'DIJobId',
        'description'         => 'Description',
        'jobSettings'         => 'JobSettings',
        'projectId'           => 'ProjectId',
        'resourceSettings'    => 'ResourceSettings',
        'tableMappings'       => 'TableMappings',
        'transformationRules' => 'TransformationRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DIJobId) {
            $res['DIJobId'] = $this->DIJobId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->jobSettings) {
            $res['JobSettings'] = null !== $this->jobSettings ? $this->jobSettings->toMap() : null;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->resourceSettings) {
            $res['ResourceSettings'] = null !== $this->resourceSettings ? $this->resourceSettings->toMap() : null;
        }
        if (null !== $this->tableMappings) {
            $res['TableMappings'] = [];
            if (null !== $this->tableMappings && \is_array($this->tableMappings)) {
                $n = 0;
                foreach ($this->tableMappings as $item) {
                    $res['TableMappings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->transformationRules) {
            $res['TransformationRules'] = [];
            if (null !== $this->transformationRules && \is_array($this->transformationRules)) {
                $n = 0;
                foreach ($this->transformationRules as $item) {
                    $res['TransformationRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDIJobRequest
     */
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
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ResourceSettings'])) {
            $model->resourceSettings = resourceSettings::fromMap($map['ResourceSettings']);
        }
        if (isset($map['TableMappings'])) {
            if (!empty($map['TableMappings'])) {
                $model->tableMappings = [];
                $n                    = 0;
                foreach ($map['TableMappings'] as $item) {
                    $model->tableMappings[$n++] = null !== $item ? tableMappings::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TransformationRules'])) {
            if (!empty($map['TransformationRules'])) {
                $model->transformationRules = [];
                $n                          = 0;
                foreach ($map['TransformationRules'] as $item) {
                    $model->transformationRules[$n++] = null !== $item ? transformationRules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
