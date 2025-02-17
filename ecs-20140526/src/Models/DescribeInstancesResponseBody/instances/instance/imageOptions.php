<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance;

use AlibabaCloud\Dara\Model;

class imageOptions extends Model
{
    /**
     * @var bool
     */
    public $currentOSNVMeSupported;
    /**
     * @var bool
     */
    public $loginAsNonRoot;
    protected $_name = [
        'currentOSNVMeSupported' => 'CurrentOSNVMeSupported',
        'loginAsNonRoot'         => 'LoginAsNonRoot',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentOSNVMeSupported) {
            $res['CurrentOSNVMeSupported'] = $this->currentOSNVMeSupported;
        }

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
        if (isset($map['CurrentOSNVMeSupported'])) {
            $model->currentOSNVMeSupported = $map['CurrentOSNVMeSupported'];
        }

        if (isset($map['LoginAsNonRoot'])) {
            $model->loginAsNonRoot = $map['LoginAsNonRoot'];
        }

        return $model;
    }
}
