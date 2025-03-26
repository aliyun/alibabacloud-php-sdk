<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingConfigurationRequest;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->loginAsNonRoot) {
            $res['LoginAsNonRoot'] = $this->loginAsNonRoot;
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
        if (isset($map['LoginAsNonRoot'])) {
            $model->loginAsNonRoot = $map['LoginAsNonRoot'];
        }

        return $model;
    }
}
