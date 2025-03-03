<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListApiDestinationsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListApiDestinationsResponseBody\data\apiDestinations;

class data extends Model
{
    /**
     * @var apiDestinations[]
     */
    public $apiDestinations;
    /**
     * @var float
     */
    public $maxResults;
    /**
     * @var string
     */
    public $nextToken;
    /**
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
        if (\is_array($this->apiDestinations)) {
            Model::validateArray($this->apiDestinations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiDestinations) {
            if (\is_array($this->apiDestinations)) {
                $res['ApiDestinations'] = [];
                $n1                     = 0;
                foreach ($this->apiDestinations as $item1) {
                    $res['ApiDestinations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiDestinations'])) {
            if (!empty($map['ApiDestinations'])) {
                $model->apiDestinations = [];
                $n1                     = 0;
                foreach ($map['ApiDestinations'] as $item1) {
                    $model->apiDestinations[$n1++] = apiDestinations::fromMap($item1);
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
