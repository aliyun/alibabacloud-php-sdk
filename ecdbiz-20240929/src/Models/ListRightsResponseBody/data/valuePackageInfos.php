<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EcdBiz\V20240929\Models\ListRightsResponseBody\data;

use AlibabaCloud\Dara\Model;

class valuePackageInfos extends Model
{
    /**
     * @var string
     */
    public $function;

    /**
     * @var string
     */
    public $valuePackageCode;
    protected $_name = [
        'function' => 'Function',
        'valuePackageCode' => 'ValuePackageCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->function) {
            $res['Function'] = $this->function;
        }

        if (null !== $this->valuePackageCode) {
            $res['ValuePackageCode'] = $this->valuePackageCode;
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
        if (isset($map['Function'])) {
            $model->function = $map['Function'];
        }

        if (isset($map['ValuePackageCode'])) {
            $model->valuePackageCode = $map['ValuePackageCode'];
        }

        return $model;
    }
}
