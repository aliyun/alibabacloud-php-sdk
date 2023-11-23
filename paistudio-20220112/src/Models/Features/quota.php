<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\Features;

use AlibabaCloud\Tea\Model;

class quota extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $isEnabled;
    protected $_name = [
        'isEnabled' => 'IsEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isEnabled) {
            $res['IsEnabled'] = $this->isEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return quota
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsEnabled'])) {
            $model->isEnabled = $map['IsEnabled'];
        }

        return $model;
    }
}
