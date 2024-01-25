<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class GetEnvironmentLicenseShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $optionsShrink;
    protected $_name = [
        'optionsShrink' => 'options',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->optionsShrink) {
            $res['options'] = $this->optionsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEnvironmentLicenseShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['options'])) {
            $model->optionsShrink = $map['options'];
        }

        return $model;
    }
}
