<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDistributionProductsLinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $codes;
    protected $_name = [
        'codes' => 'Codes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codes) {
            $res['Codes'] = $this->codes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDistributionProductsLinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Codes'])) {
            if (!empty($map['Codes'])) {
                $model->codes = $map['Codes'];
            }
        }

        return $model;
    }
}
