<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListVpcPublishedRouteEntriesResponseBody\routeEntries;

class ListVpcPublishedRouteEntriesResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var routeEntries[]
     */
    public $routeEntries;
    protected $_name = [
        'nextToken'    => 'NextToken',
        'requestId'    => 'RequestId',
        'routeEntries' => 'RouteEntries',
    ];

    public function validate()
    {
        if (\is_array($this->routeEntries)) {
            Model::validateArray($this->routeEntries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->routeEntries) {
            if (\is_array($this->routeEntries)) {
                $res['RouteEntries'] = [];
                $n1                  = 0;
                foreach ($this->routeEntries as $item1) {
                    $res['RouteEntries'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RouteEntries'])) {
            if (!empty($map['RouteEntries'])) {
                $model->routeEntries = [];
                $n1                  = 0;
                foreach ($map['RouteEntries'] as $item1) {
                    $model->routeEntries[$n1++] = routeEntries::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
