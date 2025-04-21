<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;

class MobileDetectRequest extends Model
{
    /**
     * @var string
     */
    public $mobiles;

    /**
     * @var string
     */
    public $paramType;
    protected $_name = [
        'mobiles' => 'Mobiles',
        'paramType' => 'ParamType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mobiles) {
            $res['Mobiles'] = $this->mobiles;
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
        if (isset($map['Mobiles'])) {
            $model->mobiles = $map['Mobiles'];
        }

        if (isset($map['ParamType'])) {
            $model->paramType = $map['ParamType'];
        }

        return $model;
    }
}
