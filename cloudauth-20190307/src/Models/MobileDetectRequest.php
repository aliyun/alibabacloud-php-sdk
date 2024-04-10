<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class MobileDetectRequest extends Model
{
    /**
     * @example 138********,156********
     *
     * @var string
     */
    public $mobiles;

    /**
     * @example normal
     *
     * @var string
     */
    public $paramType;
    protected $_name = [
        'mobiles'   => 'Mobiles',
        'paramType' => 'ParamType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return MobileDetectRequest
     */
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
