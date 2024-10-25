<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListDataQualityEvaluationTaskInstancesRequest extends Model
{
    /**
     * @example 2024-04-01
     *
     * @var string
     */
    public $bizdateFrom;

    /**
     * @example 2024-05-01
     *
     * @var string
     */
    public $bizdateTo;

    /**
     * @example 1710239005403
     *
     * @var int
     */
    public $createTimeFrom;

    /**
     * @example 1710239005403
     *
     * @var int
     */
    public $createTimeTo;

    /**
     * @example 10000
     *
     * @var int
     */
    public $dataQualityEvaluationTaskId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 100
     *
     * @var int
     */
    public $projectId;

    /**
     * @example odps.unit_test.tb_unit_test
     *
     * @var string
     */
    public $tableGuid;

    /**
     * @example CWF2
     *
     * @var string
     */
    public $triggerClient;

    /**
     * @example 1001
     *
     * @var string
     */
    public $triggerClientId;
    protected $_name = [
        'bizdateFrom'                 => 'BizdateFrom',
        'bizdateTo'                   => 'BizdateTo',
        'createTimeFrom'              => 'CreateTimeFrom',
        'createTimeTo'                => 'CreateTimeTo',
        'dataQualityEvaluationTaskId' => 'DataQualityEvaluationTaskId',
        'pageNumber'                  => 'PageNumber',
        'pageSize'                    => 'PageSize',
        'projectId'                   => 'ProjectId',
        'tableGuid'                   => 'TableGuid',
        'triggerClient'               => 'TriggerClient',
        'triggerClientId'             => 'TriggerClientId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizdateFrom) {
            $res['BizdateFrom'] = $this->bizdateFrom;
        }
        if (null !== $this->bizdateTo) {
            $res['BizdateTo'] = $this->bizdateTo;
        }
        if (null !== $this->createTimeFrom) {
            $res['CreateTimeFrom'] = $this->createTimeFrom;
        }
        if (null !== $this->createTimeTo) {
            $res['CreateTimeTo'] = $this->createTimeTo;
        }
        if (null !== $this->dataQualityEvaluationTaskId) {
            $res['DataQualityEvaluationTaskId'] = $this->dataQualityEvaluationTaskId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->triggerClient) {
            $res['TriggerClient'] = $this->triggerClient;
        }
        if (null !== $this->triggerClientId) {
            $res['TriggerClientId'] = $this->triggerClientId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataQualityEvaluationTaskInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizdateFrom'])) {
            $model->bizdateFrom = $map['BizdateFrom'];
        }
        if (isset($map['BizdateTo'])) {
            $model->bizdateTo = $map['BizdateTo'];
        }
        if (isset($map['CreateTimeFrom'])) {
            $model->createTimeFrom = $map['CreateTimeFrom'];
        }
        if (isset($map['CreateTimeTo'])) {
            $model->createTimeTo = $map['CreateTimeTo'];
        }
        if (isset($map['DataQualityEvaluationTaskId'])) {
            $model->dataQualityEvaluationTaskId = $map['DataQualityEvaluationTaskId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['TriggerClient'])) {
            $model->triggerClient = $map['TriggerClient'];
        }
        if (isset($map['TriggerClientId'])) {
            $model->triggerClientId = $map['TriggerClientId'];
        }

        return $model;
    }
}
