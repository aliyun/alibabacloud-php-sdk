<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class QueryFigureClustersRequest extends Model
{
    /**
     * @description The time period during which the faces are grouped together.
     *
     * @var TimeRange
     */
    public $createTimeRange;

    /**
     * @description The custom labels, which can be used as query conditions.
     *
     * @example key=value
     *
     * @var string
     */
    public $customLabels;

    /**
     * @description The name of the dataset. You can obtain the name of the dataset from the response of the [CreateDataset](https://help.aliyun.com/document_detail/478160.html) operation.
     *
     * This parameter is required.
     * @example test-dataset
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description The maximum number of entries to return. Valid values: 0 to 100. Default value: 100.
     *
     * @example 100
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example 10
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The sort order. Default value: asc.
     *
     * Valid values:
     *
     *   asc: ascending order.
     *   desc: descending order.
     *
     * @example asc
     *
     * @var string
     */
    public $order;

    /**
     * @description The name of the project. You can obtain the name of the project from the response of the [CreateProject](https://help.aliyun.com/document_detail/478153.html) operation.
     *
     * This parameter is required.
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The sort field. If you leave this parameter empty, the group ID is used as the sort field.
     *
     * Valid values:
     *
     *   ImageCount: the number of images.
     *   VideoCount: the number of videos.
     *   ProjectName: the name of the project.
     *   DatasetName: the name of the dataset.
     *   CreateTime: the point in time when the group is created.
     *   UpdateTime: the most recent point in time when the group is updated.
     *   Gender: the gender.
     *   FaceCount: the number of faces.
     *   GroupName: the name of the group.
     *
     * @example ImageCount
     *
     * @var string
     */
    public $sort;

    /**
     * @description The time period during which the faces in the group are updated.
     *
     * @var TimeRange
     */
    public $updateTimeRange;

    /**
     * @description Specifies whether to return the total number of face groups that match the current query conditions. Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $withTotalCount;
    protected $_name = [
        'createTimeRange' => 'CreateTimeRange',
        'customLabels'    => 'CustomLabels',
        'datasetName'     => 'DatasetName',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'order'           => 'Order',
        'projectName'     => 'ProjectName',
        'sort'            => 'Sort',
        'updateTimeRange' => 'UpdateTimeRange',
        'withTotalCount'  => 'WithTotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTimeRange) {
            $res['CreateTimeRange'] = null !== $this->createTimeRange ? $this->createTimeRange->toMap() : null;
        }
        if (null !== $this->customLabels) {
            $res['CustomLabels'] = $this->customLabels;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->updateTimeRange) {
            $res['UpdateTimeRange'] = null !== $this->updateTimeRange ? $this->updateTimeRange->toMap() : null;
        }
        if (null !== $this->withTotalCount) {
            $res['WithTotalCount'] = $this->withTotalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryFigureClustersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTimeRange'])) {
            $model->createTimeRange = TimeRange::fromMap($map['CreateTimeRange']);
        }
        if (isset($map['CustomLabels'])) {
            $model->customLabels = $map['CustomLabels'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['UpdateTimeRange'])) {
            $model->updateTimeRange = TimeRange::fromMap($map['UpdateTimeRange']);
        }
        if (isset($map['WithTotalCount'])) {
            $model->withTotalCount = $map['WithTotalCount'];
        }

        return $model;
    }
}
