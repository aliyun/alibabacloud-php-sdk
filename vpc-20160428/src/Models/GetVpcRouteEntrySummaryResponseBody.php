<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetVpcRouteEntrySummaryResponseBody\routeEntrySummarys;

class GetVpcRouteEntrySummaryResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var routeEntrySummarys[]
     */
    public $routeEntrySummarys;
    protected $_name = [
        'requestId' => 'RequestId',
        'routeEntrySummarys' => 'RouteEntrySummarys',
    ];

    public function validate()
    {
        if (\is_array($this->routeEntrySummarys)) {
            Model::validateArray($this->routeEntrySummarys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->routeEntrySummarys) {
            if (\is_array($this->routeEntrySummarys)) {
                $res['RouteEntrySummarys'] = [];
                $n1 = 0;
                foreach ($this->routeEntrySummarys as $item1) {
                    $res['RouteEntrySummarys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RouteEntrySummarys'])) {
            if (!empty($map['RouteEntrySummarys'])) {
                $model->routeEntrySummarys = [];
                $n1 = 0;
                foreach ($map['RouteEntrySummarys'] as $item1) {
                    $model->routeEntrySummarys[$n1] = routeEntrySummarys::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
