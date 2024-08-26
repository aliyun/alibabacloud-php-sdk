<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Tea\Model;

class ListNisInspectionTasksRequest extends Model
{
    /**
     * @var string
     */
    public $inspectionName;

    /**
     * @example basic
     *
     * @var string
     */
    public $inspectionProject;

    /**
     * @example ni-8svm******hzr7fh79
     *
     * @var string
     */
    public $inspectionTaskId;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example hKrS+MVXkuOgztXnvdml1/R9jhHkiH8eW3CfaOYU0CEL7yiT0zae6J8v1zYNg+d1
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example Active
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'inspectionName'    => 'InspectionName',
        'inspectionProject' => 'InspectionProject',
        'inspectionTaskId'  => 'InspectionTaskId',
        'maxResults'        => 'MaxResults',
        'nextToken'         => 'NextToken',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ListNisInspectionTasksRequest
     */
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
