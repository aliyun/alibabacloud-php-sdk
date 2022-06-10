<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class VendorConfig extends Model
{
    /**
     * @var MeteringConfig
     */
    public $meteringConfig;
    protected $_name = [
        'meteringConfig' => 'meteringConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->meteringConfig) {
            $res['meteringConfig'] = null !== $this->meteringConfig ? $this->meteringConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VendorConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['meteringConfig'])) {
            $model->meteringConfig = MeteringConfig::fromMap($map['meteringConfig']);
        }

        return $model;
    }
}
