<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDistributionProductsLinkShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $codesShrink;
    protected $_name = [
        'codesShrink' => 'Codes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codesShrink) {
            $res['Codes'] = $this->codesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDistributionProductsLinkShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Codes'])) {
            $model->codesShrink = $map['Codes'];
        }

        return $model;
    }
}
