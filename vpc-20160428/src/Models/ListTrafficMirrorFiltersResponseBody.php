<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListTrafficMirrorFiltersResponseBody\trafficMirrorFilters;
use AlibabaCloud\Tea\Model;

class ListTrafficMirrorFiltersResponseBody extends Model
{
    /**
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 739CA01C-92EB-4C69-BCC0-280149C6F41E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var string
     */
    public $totalCount;

    /**
     * @var trafficMirrorFilters[]
     */
    public $trafficMirrorFilters;
    protected $_name = [
        'nextToken'            => 'NextToken',
        'requestId'            => 'RequestId',
        'totalCount'           => 'TotalCount',
        'trafficMirrorFilters' => 'TrafficMirrorFilters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->trafficMirrorFilters) {
            $res['TrafficMirrorFilters'] = [];
            if (null !== $this->trafficMirrorFilters && \is_array($this->trafficMirrorFilters)) {
                $n = 0;
                foreach ($this->trafficMirrorFilters as $item) {
                    $res['TrafficMirrorFilters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTrafficMirrorFiltersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TrafficMirrorFilters'])) {
            if (!empty($map['TrafficMirrorFilters'])) {
                $model->trafficMirrorFilters = [];
                $n                           = 0;
                foreach ($map['TrafficMirrorFilters'] as $item) {
                    $model->trafficMirrorFilters[$n++] = null !== $item ? trafficMirrorFilters::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
