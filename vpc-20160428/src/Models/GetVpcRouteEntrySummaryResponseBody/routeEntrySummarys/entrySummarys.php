<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetVpcRouteEntrySummaryResponseBody\routeEntrySummarys;

use AlibabaCloud\Dara\Model;

class entrySummarys extends Model
{
    /**
     * @var int
     */
    public $count;
    /**
     * @var string
     */
    public $routeEntryType;
    protected $_name = [
        'count'          => 'Count',
        'routeEntryType' => 'RouteEntryType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->routeEntryType) {
            $res['RouteEntryType'] = $this->routeEntryType;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['RouteEntryType'])) {
            $model->routeEntryType = $map['RouteEntryType'];
        }

        return $model;
    }
}
