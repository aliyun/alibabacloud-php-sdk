<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\SimpleQueryRequest\aggregations;
use AlibabaCloud\Tea\Model;

class SimpleQueryRequest extends Model
{
    /**
     * @description The aggregations.
     *
     * >  If you perform an aggregate query, the aggregation returned in the response contains only statistical results, not the actual metadata.
     * @var aggregations[]
     */
    public $aggregations;

    /**
     * @description The name of the dataset.[](~~478160~~)
     *
     * This parameter is required.
     * @example test-dataset
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description *   If the Aggregations parameter is not specified, this parameter specifies the maximum number of files that can be returned. Valid values: 1 to 100.
     *   If the Aggregations parameter is specified, this parameter specifies the maximum number of aggregation groups that can be returned. Valid values: 0 to 2000.
     *   If you do not specify this parameter or set the parameter to 0, the default value of 100 is used.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token is used in the next request to retrieve a new page of results if the total number of results exceeds the value of the MaxResults parameter.
     *
     * You do not need to specify this parameter in your initial request.
     * @example MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpwZw==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The sort order. Valid values:
     *
     *   asc: sorts the results in ascending order.
     *   desc: sorts the results in descending order. This is the default value.
     *
     *   You can specify multiple sort orders that are separated by commas. Example: asc,desc.
     *
     *   The number of elements in the Order parameter must be less than or equal to the number of elements in the Sort parameter. For example, if the value of the Sort parameter is Size,Filename, you can set the Order parameter to desc,asc.
     *
     *   If the number of sort orders is less than the number of sort fields, the sort fields for which no sorting orders are explicitly specified use the asc order by default. For example, if you set Sort to Size,Filename and Order to asc, the Filename field defaults to the value of asc.
     *
     * @example asc,desc
     *
     * @var string
     */
    public $order;

    /**
     * @description The name of the project.[](~~478153~~)
     *
     * This parameter is required.
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The query conditions.
     *
     * @var SimpleQuery
     */
    public $query;

    /**
     * @description The sort fields. For more information, see [Supported fields and operators](https://help.aliyun.com/document_detail/2743991.html).
     *
     * >
     *
     *   If you specify multiple sort fields, separate them with commas (,), as in Size,Filename.
     *
     *   You can specify up to five sort fields.
     *
     *   The order of the sort fields determines their precedence in the sorting process.
     *
     * @example Size,Filename
     *
     * @var string
     */
    public $sort;

    /**
     * @description The fields that you want to include in the response. You can use this parameter to reduce the size of the response.
     *
     * If you do not specify this parameter or leave this parameter empty, the operation returns all metadata fields.
     * @var string[]
     */
    public $withFields;

    /**
     * @description Specifies whether to return the total number of hits. Valid values:
     *
     *   true
     *   false
     *
     * @var bool
     */
    public $withoutTotalHits;
    protected $_name = [
        'aggregations'     => 'Aggregations',
        'datasetName'      => 'DatasetName',
        'maxResults'       => 'MaxResults',
        'nextToken'        => 'NextToken',
        'order'            => 'Order',
        'projectName'      => 'ProjectName',
        'query'            => 'Query',
        'sort'             => 'Sort',
        'withFields'       => 'WithFields',
        'withoutTotalHits' => 'WithoutTotalHits',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregations) {
            $res['Aggregations'] = [];
            if (null !== $this->aggregations && \is_array($this->aggregations)) {
                $n = 0;
                foreach ($this->aggregations as $item) {
                    $res['Aggregations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->query) {
            $res['Query'] = null !== $this->query ? $this->query->toMap() : null;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->withFields) {
            $res['WithFields'] = $this->withFields;
        }
        if (null !== $this->withoutTotalHits) {
            $res['WithoutTotalHits'] = $this->withoutTotalHits;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SimpleQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aggregations'])) {
            if (!empty($map['Aggregations'])) {
                $model->aggregations = [];
                $n                   = 0;
                foreach ($map['Aggregations'] as $item) {
                    $model->aggregations[$n++] = null !== $item ? aggregations::fromMap($item) : $item;
                }
            }
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
        if (isset($map['Query'])) {
            $model->query = SimpleQuery::fromMap($map['Query']);
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['WithFields'])) {
            if (!empty($map['WithFields'])) {
                $model->withFields = $map['WithFields'];
            }
        }
        if (isset($map['WithoutTotalHits'])) {
            $model->withoutTotalHits = $map['WithoutTotalHits'];
        }

        return $model;
    }
}
