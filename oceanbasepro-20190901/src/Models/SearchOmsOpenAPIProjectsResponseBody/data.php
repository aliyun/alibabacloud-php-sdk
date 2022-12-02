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
     * @var string
     */
    public $businessName;

    /**
     * @var destConfig
     */
    public $destConfig;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $projectOwner;

    /**
     * @var sourceConfig
     */
    public $sourceConfig;

    /**
     * @var steps[]
     */
    public $steps;

    /**
     * @var transferMapping
     */
    public $transferMapping;

    /**
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
