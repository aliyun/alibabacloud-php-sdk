<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SearchEditingProjectRequest extends Model
{
    /**
     * @description The source of the project.
     *
     * Valid values:
     *
     *   AliyunConsole: The project is created in the Alibaba Cloud console.
     *   WebSDK: The project is created by using the SDK for Web.
     *   OpenAPI: The project is created by calling API operations.
     *
     * @example WebSDK
     *
     * @var string
     */
    public $createSource;

    /**
     * @description The end of the time range to query. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2017-01-11T12:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Default value: 10. Valid values: 1 to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The type of the editing project. Default value: EditingProject. Valid values:
     *
     *   EditingProject: a regular editing project.
     *   LiveEditingProject: a live stream editing project.
     *
     * @example EditingProject
     *
     * @var string
     */
    public $projectType;

    /**
     * @description The sorting rule of results. Valid values:
     *
     * \\- CreationTime:Asc: The results are sorted in chronological order based on the creation time.
     * @example CreationTime:Desc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The beginning of the time range to query. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2017-01-11T12:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the online editing project. Separate multiple values with commas (,). By default, all online editing projects are queried.
     *
     * \\-ProduceFailed
     * @example Producing
     *
     * @var string
     */
    public $status;

    /**
     * @description The template type. Valid values:
     *
     * Valid values:
     *
     *   Timeline: regular template.
     *   VETemplate: advanced template.
     *   None: No template is used.
     *
     * @example Timeline
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'createSource' => 'CreateSource',
        'endTime'      => 'EndTime',
        'pageNo'       => 'PageNo',
        'pageSize'     => 'PageSize',
        'projectType'  => 'ProjectType',
        'sortBy'       => 'SortBy',
        'startTime'    => 'StartTime',
        'status'       => 'Status',
        'templateType' => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createSource) {
            $res['CreateSource'] = $this->createSource;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectType) {
            $res['ProjectType'] = $this->projectType;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchEditingProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateSource'])) {
            $model->createSource = $map['CreateSource'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectType'])) {
            $model->projectType = $map['ProjectType'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
