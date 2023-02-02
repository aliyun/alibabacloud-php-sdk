<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\SearchOmsOpenAPIProjectsResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\SearchOmsOpenAPIProjectsResponseBody\data\destConfig;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\SearchOmsOpenAPIProjectsResponseBody\data\labels;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\SearchOmsOpenAPIProjectsResponseBody\data\sourceConfig;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\SearchOmsOpenAPIProjectsResponseBody\data\steps;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\SearchOmsOpenAPIProjectsResponseBody\data\transferMapping;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\SearchOmsOpenAPIProjectsResponseBody\data\transferStepConfig;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The business system identifier, which is optional and is a specific field of the Post message.
     *
     * @example OMS_TEST
     *
     * @var string
     */
    public $businessName;

    /**
     * @description The settings of the destination data source.
     *
     * @var destConfig
     */
    public $destConfig;

    /**
     * @description A collection of label IDs.
     *
     * @var labels[]
     */
    public $labels;

    /**
     * @description The project ID.
     *
     * @example p_gasdfdsfg
     *
     * @var string
     */
    public $projectId;

    /**
     * @description The name of the project.
     *
     * @example p_gasdfdsfg
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The project owner.
     *
     * @example Zhang San
     *
     * @var string
     */
    public $projectOwner;

    /**
     * @description The settings of the source data source.
     *
     * @var sourceConfig
     */
    public $sourceConfig;

    /**
     * @description The detailed project steps.
     *
     * @var steps[]
     */
    public $steps;

    /**
     * @description The mappings for the synchronization objects.
     *
     * @var transferMapping
     */
    public $transferMapping;

    /**
     * @description The settings of synchronization steps
     *
     * @var transferStepConfig
     */
    public $transferStepConfig;
    protected $_name = [
        'businessName'       => 'BusinessName',
        'destConfig'         => 'DestConfig',
        'labels'             => 'Labels',
        'projectId'          => 'ProjectId',
        'projectName'        => 'ProjectName',
        'projectOwner'       => 'ProjectOwner',
        'sourceConfig'       => 'SourceConfig',
        'steps'              => 'Steps',
        'transferMapping'    => 'TransferMapping',
        'transferStepConfig' => 'TransferStepConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessName) {
            $res['BusinessName'] = $this->businessName;
        }
        if (null !== $this->destConfig) {
            $res['DestConfig'] = null !== $this->destConfig ? $this->destConfig->toMap() : null;
        }
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->projectOwner) {
            $res['ProjectOwner'] = $this->projectOwner;
        }
        if (null !== $this->sourceConfig) {
            $res['SourceConfig'] = null !== $this->sourceConfig ? $this->sourceConfig->toMap() : null;
        }
        if (null !== $this->steps) {
            $res['Steps'] = [];
            if (null !== $this->steps && \is_array($this->steps)) {
                $n = 0;
                foreach ($this->steps as $item) {
                    $res['Steps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->transferMapping) {
            $res['TransferMapping'] = null !== $this->transferMapping ? $this->transferMapping->toMap() : null;
        }
        if (null !== $this->transferStepConfig) {
            $res['TransferStepConfig'] = null !== $this->transferStepConfig ? $this->transferStepConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessName'])) {
            $model->businessName = $map['BusinessName'];
        }
        if (isset($map['DestConfig'])) {
            $model->destConfig = destConfig::fromMap($map['DestConfig']);
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? labels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ProjectOwner'])) {
            $model->projectOwner = $map['ProjectOwner'];
        }
        if (isset($map['SourceConfig'])) {
            $model->sourceConfig = sourceConfig::fromMap($map['SourceConfig']);
        }
        if (isset($map['Steps'])) {
            if (!empty($map['Steps'])) {
                $model->steps = [];
                $n            = 0;
                foreach ($map['Steps'] as $item) {
                    $model->steps[$n++] = null !== $item ? steps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TransferMapping'])) {
            $model->transferMapping = transferMapping::fromMap($map['TransferMapping']);
        }
        if (isset($map['TransferStepConfig'])) {
            $model->transferStepConfig = transferStepConfig::fromMap($map['TransferStepConfig']);
        }

        return $model;
    }
}
