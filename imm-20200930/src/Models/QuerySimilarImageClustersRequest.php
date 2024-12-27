<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class QuerySimilarImageClustersRequest extends Model
{
    /**
     * @description The custom tags, which are used to filter tasks.
     *
     * @example {"key": "val"}
     *
     * @var string
     */
    public $customLabels;

    /**
     * @description The name of the dataset. For more information, see [Create a dataset](https://help.aliyun.com/document_detail/478160.html).
     *
     * This parameter is required.
     * @example test-dataset
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description The number of entries per page. Value range: 0 to 100. Default value: 100.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token.
     *
     * >  The first time you call this operation in a query, set this parameter to null.
     * @example CAESEgoQCg4KClVwZGF0ZVRpbWUQARgBIs8ECgkAAJLUwUCAQ****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The sorting order. Valid values:
     *
     *   asc: ascending order.
     *   desc: descending order. This is the default value.
     *
     * @example asc
     *
     * @var string
     */
    public $order;

    /**
     * @description The name of the project. For more information, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     *
     * This parameter is required.
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The sorting field.
     *
     *   CreateTime: the time when the clusters were created.
     *   UpdateTime: the time when the clusters were updated. This is the default value.
     *
     * @example UpdateTime
     *
     * @var string
     */
    public $sort;
    protected $_name = [
        'customLabels' => 'CustomLabels',
        'datasetName'  => 'DatasetName',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'order'        => 'Order',
        'projectName'  => 'ProjectName',
        'sort'         => 'Sort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySimilarImageClustersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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

        return $model;
    }
}
