<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class ListDIJobsRequest extends Model
{
    /**
     * @var string
     */
    public $destinationDataSourceType;

    /**
     * @var string
     */
    public $jobName;

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
    public $sourceDataSourceType;
    protected $_name = [
        'destinationDataSourceType' => 'DestinationDataSourceType',
        'jobName' => 'JobName',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'projectId' => 'ProjectId',
        'sourceDataSourceType' => 'SourceDataSourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinationDataSourceType) {
            $res['DestinationDataSourceType'] = $this->destinationDataSourceType;
        }

        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
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

        if (null !== $this->sourceDataSourceType) {
            $res['SourceDataSourceType'] = $this->sourceDataSourceType;
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
        if (isset($map['DestinationDataSourceType'])) {
            $model->destinationDataSourceType = $map['DestinationDataSourceType'];
        }

        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
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

        if (isset($map['SourceDataSourceType'])) {
            $model->sourceDataSourceType = $map['SourceDataSourceType'];
        }

        return $model;
    }
}
