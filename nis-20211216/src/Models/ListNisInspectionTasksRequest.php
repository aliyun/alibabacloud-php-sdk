<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Dara\Model;

class ListNisInspectionTasksRequest extends Model
{
    /**
     * @var string
     */
    public $inspectionName;

    /**
     * @var string
     */
    public $inspectionProject;

    /**
     * @var string
     */
    public $inspectionTaskId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'inspectionName' => 'InspectionName',
        'inspectionProject' => 'InspectionProject',
        'inspectionTaskId' => 'InspectionTaskId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inspectionName) {
            $res['InspectionName'] = $this->inspectionName;
        }

        if (null !== $this->inspectionProject) {
            $res['InspectionProject'] = $this->inspectionProject;
        }

        if (null !== $this->inspectionTaskId) {
            $res['InspectionTaskId'] = $this->inspectionTaskId;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['InspectionName'])) {
            $model->inspectionName = $map['InspectionName'];
        }

        if (isset($map['InspectionProject'])) {
            $model->inspectionProject = $map['InspectionProject'];
        }

        if (isset($map['InspectionTaskId'])) {
            $model->inspectionTaskId = $map['InspectionTaskId'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
