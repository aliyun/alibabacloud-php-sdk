<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Dara\Model;

class DescribeDistributionProductsLinkShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $codesShrink;
    protected $_name = [
        'codesShrink' => 'Codes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codesShrink) {
            $res['Codes'] = $this->codesShrink;
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
        if (isset($map['Codes'])) {
            $model->codesShrink = $map['Codes'];
        }

        return $model;
    }
}
