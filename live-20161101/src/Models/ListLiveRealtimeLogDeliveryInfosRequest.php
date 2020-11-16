<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ListLiveRealtimeLogDeliveryInfosRequest extends Model
{
    /**
     * @var string
     */
    public $liveOpenapiReserve;
    protected $_name = [
        'liveOpenapiReserve' => 'LiveOpenapiReserve',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveOpenapiReserve) {
            $res['LiveOpenapiReserve'] = $this->liveOpenapiReserve;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLiveRealtimeLogDeliveryInfosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveOpenapiReserve'])) {
            $model->liveOpenapiReserve = $map['LiveOpenapiReserve'];
        }

        return $model;
    }
}
