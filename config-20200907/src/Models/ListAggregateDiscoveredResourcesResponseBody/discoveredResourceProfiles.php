<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateDiscoveredResourcesResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateDiscoveredResourcesResponseBody\discoveredResourceProfiles\discoveredResourceProfileList;
use AlibabaCloud\Tea\Model;

class discoveredResourceProfiles extends Model
{
    /**
     * @description The details of the resources.
     *
     * @var discoveredResourceProfileList[]
     */
    public $discoveredResourceProfileList;

    /**
     * @description The maximum number of entries returned on each page.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that was used to initiate the next request.
     *
     * @example IWBjqMYSy0is7zSMGu16****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The total number of resources.
     *
     * @example 8
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'discoveredResourceProfileList' => 'DiscoveredResourceProfileList',
        'maxResults'                    => 'MaxResults',
        'nextToken'                     => 'NextToken',
        'totalCount'                    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->discoveredResourceProfileList) {
            $res['DiscoveredResourceProfileList'] = [];
            if (null !== $this->discoveredResourceProfileList && \is_array($this->discoveredResourceProfileList)) {
                $n = 0;
                foreach ($this->discoveredResourceProfileList as $item) {
                    $res['DiscoveredResourceProfileList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return discoveredResourceProfiles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiscoveredResourceProfileList'])) {
            if (!empty($map['DiscoveredResourceProfileList'])) {
                $model->discoveredResourceProfileList = [];
                $n                                    = 0;
                foreach ($map['DiscoveredResourceProfileList'] as $item) {
                    $model->discoveredResourceProfileList[$n++] = null !== $item ? discoveredResourceProfileList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
