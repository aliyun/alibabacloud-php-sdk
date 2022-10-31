<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveRealtimeLogAuthorizedRequest extends Model
{
    /**
     * @var string
     */
    public $liveOpenapiReserve;

    /**
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'liveOpenapiReserve' => 'LiveOpenapiReserve',
        'ownerId'            => 'OwnerId',
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveRealtimeLogAuthorizedRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveOpenapiReserve'])) {
            $model->liveOpenapiReserve = $map['LiveOpenapiReserve'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
