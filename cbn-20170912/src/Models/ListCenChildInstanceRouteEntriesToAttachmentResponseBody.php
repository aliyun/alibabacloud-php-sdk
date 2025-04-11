<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListCenChildInstanceRouteEntriesToAttachmentResponseBody\routeEntry;

class ListCenChildInstanceRouteEntriesToAttachmentResponseBody extends Model
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
     * @var routeEntry[]
     */
    public $routeEntry;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'routeEntry' => 'RouteEntry',
    ];

    public function validate()
    {
        if (\is_array($this->routeEntry)) {
            Model::validateArray($this->routeEntry);
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

        if (null !== $this->routeEntry) {
            if (\is_array($this->routeEntry)) {
                $res['RouteEntry'] = [];
                $n1 = 0;
                foreach ($this->routeEntry as $item1) {
                    $res['RouteEntry'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['RouteEntry'])) {
            if (!empty($map['RouteEntry'])) {
                $model->routeEntry = [];
                $n1 = 0;
                foreach ($map['RouteEntry'] as $item1) {
                    $model->routeEntry[$n1++] = routeEntry::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
