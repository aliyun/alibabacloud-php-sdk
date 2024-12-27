<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class FuzzyQueryShrinkRequest extends Model
{
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
     * @description The maximum number of entries to return. Valid values: 0 to 200.
     *
     * Default value: 100.
     * @example 1
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. If the total number of files is greater than the value of MaxResults, you must specify NextToken.
     *
     * You do not need to specify this parameter for the first request.
     * @example MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpwZw==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The sorting method. Valid values:
     *
     *   asc: ascending order.
     *   desc (default): descending order.
     *
     * >
     *
     *   Separate multiple sorting methods with commas (,). Example: asc,desc.
     *
     *   The number of values for Order must be less than or equal to the number of values for Sort. For example, if you set Sort to Size,Filename, you can set Order only to desc or asc.
     *
     *   If the number of values for Order is less than the number of values for Sort, the unsorted fields are default to the value of asc. For example, if you set Sort to Size,Filename and Order to asc, the Filename field is default to the value of asc.
     *
     * @example asc,desc
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
     * @description The query content. The value can be up to 1 MB in size.
     *
     * This parameter is required.
     * @var string
     */
    public $query;

    /**
     * @description The sort field. For more information, see [Supported fields and operators](https://help.aliyun.com/document_detail/2743991.html).
     *
     *   Separate multiple sort fields with commas (,). Example: `Size,Filename`.
     *   You can specify up to five sort fields.
     *   The priority order of sorting is determined based on the order of the sort fields.
     *
     * @example Size,Filename
     *
     * @var string
     */
    public $sort;

    /**
     * @description The fields that you want to include in the response. To help reduce the size of the response, include only necessary metadata fields.
     *
     * If you do not specify this parameter or set the value to null, all existing metadata fields are returned.
     * @var string
     */
    public $withFieldsShrink;
    protected $_name = [
        'datasetName'      => 'DatasetName',
        'maxResults'       => 'MaxResults',
        'nextToken'        => 'NextToken',
        'order'            => 'Order',
        'projectName'      => 'ProjectName',
        'query'            => 'Query',
        'sort'             => 'Sort',
        'withFieldsShrink' => 'WithFields',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->withFieldsShrink) {
            $res['WithFields'] = $this->withFieldsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FuzzyQueryShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['WithFields'])) {
            $model->withFieldsShrink = $map['WithFields'];
        }

        return $model;
    }
}
