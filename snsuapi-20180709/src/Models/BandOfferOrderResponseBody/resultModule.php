<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Snsuapi\V20180709\Models\BandOfferOrderResponseBody;

use AlibabaCloud\Tea\Model;

class resultModule extends Model
{
    /**
     * @var int
     */
    public $lxOrderId;
    protected $_name = [
        'lxOrderId' => 'LxOrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lxOrderId) {
            $res['LxOrderId'] = $this->lxOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LxOrderId'])) {
            $model->lxOrderId = $map['LxOrderId'];
        }

        return $model;
    }
}
