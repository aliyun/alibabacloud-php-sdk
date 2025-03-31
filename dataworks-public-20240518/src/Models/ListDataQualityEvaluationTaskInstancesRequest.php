<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class ListDataQualityEvaluationTaskInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $bizdateFrom;

    /**
     * @var string
     */
    public $bizdateTo;

    /**
     * @var int
     */
    public $createTimeFrom;

    /**
     * @var int
     */
    public $createTimeTo;

    /**
     * @var int
     */
    public $dataQualityEvaluationTaskId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $tableGuid;

    /**
     * @var string
     */
    public $triggerClient;

    /**
     * @var string
     */
    public $triggerClientId;
    protected $_name = [
        'bizdateFrom' => 'BizdateFrom',
        'bizdateTo' => 'BizdateTo',
        'createTimeFrom' => 'CreateTimeFrom',
        'createTimeTo' => 'CreateTimeTo',
        'dataQualityEvaluationTaskId' => 'DataQualityEvaluationTaskId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'projectId' => 'ProjectId',
        'tableGuid' => 'TableGuid',
        'triggerClient' => 'TriggerClient',
        'triggerClientId' => 'TriggerClientId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
