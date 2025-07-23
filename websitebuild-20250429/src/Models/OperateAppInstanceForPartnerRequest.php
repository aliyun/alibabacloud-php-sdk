<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Tea\Model;

class OperateAppInstanceForPartnerRequest extends Model
{
    /**
     * @var string
     */
    public $extend;

    /**
     * @example SERVICE_DELIVERY_PROCESS
     *
     * @var string
     */
    public $operateEvent;
    protected $_name = [
        'extend' => 'Extend',
        'operateEvent' => 'OperateEvent',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }
        if (null !== $this->operateEvent) {
            $res['OperateEvent'] = $this->operateEvent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperateAppInstanceForPartnerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }
        if (isset($map['OperateEvent'])) {
            $model->operateEvent = $map['OperateEvent'];
        }

        return $model;
    }
}
