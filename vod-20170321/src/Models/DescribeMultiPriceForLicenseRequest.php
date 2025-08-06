<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class DescribeMultiPriceForLicenseRequest extends Model
{
    /**
     * @var string
     */
    public $paramStr;
    protected $_name = [
        'paramStr' => 'ParamStr',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->paramStr) {
            $res['ParamStr'] = $this->paramStr;
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
        if (isset($map['ParamStr'])) {
            $model->paramStr = $map['ParamStr'];
        }

        return $model;
    }
}
