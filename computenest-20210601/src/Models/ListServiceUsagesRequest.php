<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceUsagesRequest\filter;
use AlibabaCloud\Tea\Model;

class ListServiceUsagesRequest extends Model
{
    /**
     * @description The filters.
     *
     * @var filter[]
     */
    public $filter;

    /**
     * @description The number of entries per page. Valid values: 1 to 100. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example AAAAAWns8w4MmhzeptXVRG0PUEU=
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'filter' => 'Filter',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->filter) {
            $res['Filter'] = [];
            if (null !== $this->filter && \is_array($this->filter)) {
                $n = 0;
                foreach ($this->filter as $item) {
                    $res['Filter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceUsagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Filter'])) {
            if (!empty($map['Filter'])) {
                $model->filter = [];
                $n = 0;
                foreach ($map['Filter'] as $item) {
                    $model->filter[$n++] = null !== $item ? filter::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
