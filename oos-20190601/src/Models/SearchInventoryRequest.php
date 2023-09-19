<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\SearchInventoryRequest\filter;
use AlibabaCloud\Tea\Model;

class SearchInventoryRequest extends Model
{
    /**
     * @description The information about aggregators. You can use one or more aggregators to query the aggregate information of an instance. Valid values:
     *
     *   ACS:Application.Name
     *   ACS:Application.Version
     *
     * @example ACS:Application.Name
     *
     * @var string[]
     */
    public $aggregator;

    /**
     * @description The filter rules for the component.
     *
     * @var filter[]
     */
    public $filter;

    /**
     * @description The number of entries per page. Valid values: 1 to 100. Default value: 50.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used to retrieve the next page of results.
     *
     * @example gAAAAABfTgv5ewUWmNdJ3g7JVLvX70sPH90GZOVGC
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'aggregator' => 'Aggregator',
        'filter'     => 'Filter',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregator) {
            $res['Aggregator'] = $this->aggregator;
        }
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchInventoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aggregator'])) {
            if (!empty($map['Aggregator'])) {
                $model->aggregator = $map['Aggregator'];
            }
        }
        if (isset($map['Filter'])) {
            if (!empty($map['Filter'])) {
                $model->filter = [];
                $n             = 0;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
