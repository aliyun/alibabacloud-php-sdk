<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListDIJobsRequest extends Model
{
    /**
     * @description The destination type. If you do not configure this parameter, no limits are imposed on the tasks.
     *
     * @example Hologres
     *
     * @var string
     */
    public $destinationDataSourceType;

    /**
     * @description The name of the task. Fuzzy match is supported. If you do not configure this parameter, no limits are imposed on the tasks.
     *
     * @example mysql_to_holo_sync_8772
     *
     * @var string
     */
    public $jobName;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 10. Maximum value: 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the workspace.
     *
     * This parameter is required.
     * @example 1967
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The source type. If you do not configure this parameter, no limits are imposed on the tasks.
     *
     * @example MySQL
     *
     * @var string
     */
    public $sourceDataSourceType;
    protected $_name = [
        'destinationDataSourceType' => 'DestinationDataSourceType',
        'jobName'                   => 'JobName',
        'pageNumber'                => 'PageNumber',
        'pageSize'                  => 'PageSize',
        'projectId'                 => 'ProjectId',
        'sourceDataSourceType'      => 'SourceDataSourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ListDIJobsRequest
     */
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
