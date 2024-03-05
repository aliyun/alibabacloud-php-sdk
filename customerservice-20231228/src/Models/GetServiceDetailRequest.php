<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models;

use AlibabaCloud\Tea\Model;

class GetServiceDetailRequest extends Model
{
    /**
     * @var string
     */
    public $applyCode;
    protected $_name = [
        'applyCode' => 'applyCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyCode) {
            $res['applyCode'] = $this->applyCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['applyCode'])) {
            $model->applyCode = $map['applyCode'];
        }

        return $model;
    }
}
