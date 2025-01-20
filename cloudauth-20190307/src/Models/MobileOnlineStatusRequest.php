<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;

class MobileOnlineStatusRequest extends Model
{
    /**
     * @var string
     */
    public $mobile;
    /**
     * @var string
     */
    public $paramType;
    protected $_name = [
        'mobile'    => 'Mobile',
        'paramType' => 'ParamType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }

        if (null !== $this->paramType) {
            $res['ParamType'] = $this->paramType;
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
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }

        if (isset($map['ParamType'])) {
            $model->paramType = $map['ParamType'];
        }

        return $model;
    }
}
