<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListApiDestinationsResponseBody;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListApiDestinationsResponseBody\data\apiDestinations;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The API destinations.
     *
     * @var apiDestinations[]
     */
    public $apiDestinations;

    /**
     * @description The maximum number of entries returned per page.
     *
     * @example 10
     *
     * @var float
     */
    public $maxResults;

    /**
     * @description If excess return values exist, this parameter is returned.
     *
     * @example 1
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The total number of entries returned.
     *
     * @example 2
     *
     * @var float
     */
    public $total;
    protected $_name = [
        'apiDestinations' => 'ApiDestinations',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'total'           => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiDestinations) {
            $res['ApiDestinations'] = [];
            if (null !== $this->apiDestinations && \is_array($this->apiDestinations)) {
                $n = 0;
                foreach ($this->apiDestinations as $item) {
                    $res['ApiDestinations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiDestinations'])) {
            if (!empty($map['ApiDestinations'])) {
                $model->apiDestinations = [];
                $n                      = 0;
                foreach ($map['ApiDestinations'] as $item) {
                    $model->apiDestinations[$n++] = null !== $item ? apiDestinations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
