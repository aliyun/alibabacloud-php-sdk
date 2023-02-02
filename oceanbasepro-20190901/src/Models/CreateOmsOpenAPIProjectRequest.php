<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateOmsOpenAPIProjectRequest\destConfig;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateOmsOpenAPIProjectRequest\sourceConfig;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateOmsOpenAPIProjectRequest\transferMapping;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateOmsOpenAPIProjectRequest\transferStepConfig;
use AlibabaCloud\Tea\Model;

class CreateOmsOpenAPIProjectRequest extends Model
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
     * @var string[]
     */
    public $labelIds;

    /**
     * @description The page number, which takes effect in a pagination query.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The page size, which takes effect in a pagination query.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the project.
     *
     * @example test-l
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The settings of the source data source.
     *
     * @var sourceConfig
     */
    public $sourceConfig;

    /**
     * @description The mappings for the synchronization objects.
     *
     * @var transferMapping
     */
    public $transferMapping;

    /**
     * @description The settings of synchronization steps.
     *
     * @example OMS_TEST
     *
     * @var transferStepConfig
     */
    public $transferStepConfig;

    /**
     * @description The ID of the migration instance. Generally, if you want to create a project on a public cloud, you must first purchase a migration instance.
     *
     * @example g_abcd
     *
     * @var string
     */
    public $workerGradeId;
    protected $_name = [
        'businessName'       => 'BusinessName',
        'destConfig'         => 'DestConfig',
        'labelIds'           => 'LabelIds',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'projectName'        => 'ProjectName',
        'sourceConfig'       => 'SourceConfig',
        'transferMapping'    => 'TransferMapping',
        'transferStepConfig' => 'TransferStepConfig',
        'workerGradeId'      => 'WorkerGradeId',
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
        if (null !== $this->labelIds) {
            $res['LabelIds'] = $this->labelIds;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->sourceConfig) {
            $res['SourceConfig'] = null !== $this->sourceConfig ? $this->sourceConfig->toMap() : null;
        }
        if (null !== $this->transferMapping) {
            $res['TransferMapping'] = null !== $this->transferMapping ? $this->transferMapping->toMap() : null;
        }
        if (null !== $this->transferStepConfig) {
            $res['TransferStepConfig'] = null !== $this->transferStepConfig ? $this->transferStepConfig->toMap() : null;
        }
        if (null !== $this->workerGradeId) {
            $res['WorkerGradeId'] = $this->workerGradeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOmsOpenAPIProjectRequest
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
        if (isset($map['LabelIds'])) {
            if (!empty($map['LabelIds'])) {
                $model->labelIds = $map['LabelIds'];
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['SourceConfig'])) {
            $model->sourceConfig = sourceConfig::fromMap($map['SourceConfig']);
        }
        if (isset($map['TransferMapping'])) {
            $model->transferMapping = transferMapping::fromMap($map['TransferMapping']);
        }
        if (isset($map['TransferStepConfig'])) {
            $model->transferStepConfig = transferStepConfig::fromMap($map['TransferStepConfig']);
        }
        if (isset($map['WorkerGradeId'])) {
            $model->workerGradeId = $map['WorkerGradeId'];
        }

        return $model;
    }
}
