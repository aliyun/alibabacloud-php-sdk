<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class ListDataQualityRulesRequest extends Model
{
    /**
     * @var int
     */
    public $dataQualityEvaluationTaskId;
    /**
     * @var string
     */
    public $name;
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
    protected $_name = [
        'dataQualityEvaluationTaskId' => 'DataQualityEvaluationTaskId',
        'name'                        => 'Name',
        'pageNumber'                  => 'PageNumber',
        'pageSize'                    => 'PageSize',
        'projectId'                   => 'ProjectId',
        'tableGuid'                   => 'TableGuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataQualityEvaluationTaskId) {
            $res['DataQualityEvaluationTaskId'] = $this->dataQualityEvaluationTaskId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataQualityEvaluationTaskId'])) {
            $model->dataQualityEvaluationTaskId = $map['DataQualityEvaluationTaskId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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

        return $model;
    }
}
