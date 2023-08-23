<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingConfigurationShrinkRequest;

use AlibabaCloud\Tea\Model;

class imageOptions extends Model
{
    /**
     * @var bool
     */
    public $loginAsNonRoot;
    protected $_name = [
        'loginAsNonRoot' => 'LoginAsNonRoot',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loginAsNonRoot) {
            $res['LoginAsNonRoot'] = $this->loginAsNonRoot;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoginAsNonRoot'])) {
            $model->loginAsNonRoot = $map['LoginAsNonRoot'];
        }

        return $model;
    }
}
