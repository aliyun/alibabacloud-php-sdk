<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class CreateOmsOpenAPIProjectShrinkRequest extends Model
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
     * @var string
     */
    public $destConfigShrink;

    /**
     * @description A collection of label IDs.
     *
     * @var string
     */
    public $labelIdsShrink;

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
     * @var string
     */
    public $sourceConfigShrink;

    /**
     * @description The mappings for the synchronization objects.
     *
     * @var string
     */
    public $transferMappingShrink;

    /**
     * @description The settings of synchronization steps.
     *
     * @example OMS_TEST
     *
     * @var string
     */
    public $transferStepConfigShrink;

    /**
     * @description The ID of the migration instance. Generally, if you want to create a project on a public cloud, you must first purchase a migration instance.
     *
     * @example g_abcd
     *
     * @var string
     */
    public $workerGradeId;
    protected $_name = [
        'businessName'             => 'BusinessName',
        'destConfigShrink'         => 'DestConfig',
        'labelIdsShrink'           => 'LabelIds',
        'pageNumber'               => 'PageNumber',
        'pageSize'                 => 'PageSize',
        'projectName'              => 'ProjectName',
        'sourceConfigShrink'       => 'SourceConfig',
        'transferMappingShrink'    => 'TransferMapping',
        'transferStepConfigShrink' => 'TransferStepConfig',
        'workerGradeId'            => 'WorkerGradeId',
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
        if (null !== $this->destConfigShrink) {
            $res['DestConfig'] = $this->destConfigShrink;
        }
        if (null !== $this->labelIdsShrink) {
            $res['LabelIds'] = $this->labelIdsShrink;
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
        if (null !== $this->sourceConfigShrink) {
            $res['SourceConfig'] = $this->sourceConfigShrink;
        }
        if (null !== $this->transferMappingShrink) {
            $res['TransferMapping'] = $this->transferMappingShrink;
        }
        if (null !== $this->transferStepConfigShrink) {
            $res['TransferStepConfig'] = $this->transferStepConfigShrink;
        }
        if (null !== $this->workerGradeId) {
            $res['WorkerGradeId'] = $this->workerGradeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOmsOpenAPIProjectShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessName'])) {
            $model->businessName = $map['BusinessName'];
        }
        if (isset($map['DestConfig'])) {
            $model->destConfigShrink = $map['DestConfig'];
        }
        if (isset($map['LabelIds'])) {
            $model->labelIdsShrink = $map['LabelIds'];
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
            $model->sourceConfigShrink = $map['SourceConfig'];
        }
        if (isset($map['TransferMapping'])) {
            $model->transferMappingShrink = $map['TransferMapping'];
        }
        if (isset($map['TransferStepConfig'])) {
            $model->transferStepConfigShrink = $map['TransferStepConfig'];
        }
        if (isset($map['WorkerGradeId'])) {
            $model->workerGradeId = $map['WorkerGradeId'];
        }

        return $model;
    }
}
