<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class OperateAppInstanceForPartnerRequest extends Model
{
    /**
     * @var string
     */
    public $extend;

    /**
     * @var string
     */
    public $operateEvent;
    protected $_name = [
        'extend' => 'Extend',
        'operateEvent' => 'OperateEvent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
