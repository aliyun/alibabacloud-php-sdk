<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class CreateOmsOpenAPIProjectShrinkRequest extends Model
{
    /**
     * @example OMS_TEST
     *
     * @var string
     */
    public $businessName;

    /**
     * @var string
     */
    public $destConfigShrink;

    /**
     * @var string
     */
    public $labelIdsShrink;

    /**
     * @description 页序号，分页查询时生效
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 页大小，分页查询时生效
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example test-l
     *
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $sourceConfigShrink;

    /**
     * @var string
     */
    public $transferMappingShrink;

    /**
     * @example OMS_TEST
     *
     * @var string
     */
    public $transferStepConfigShrink;

    /**
     * @description 实例规格 ID，创建项目时生效
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
