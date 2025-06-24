<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class ListESAIPInfoRequest extends Model
{
    /**
     * @var string
     */
    public $vipInfo;
    protected $_name = [
        'vipInfo' => 'VipInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vipInfo) {
            $res['VipInfo'] = $this->vipInfo;
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
        if (isset($map['VipInfo'])) {
            $model->vipInfo = $map['VipInfo'];
        }

        return $model;
    }
}
