<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\Features;

use AlibabaCloud\Dara\Model;

class quota extends Model
{
    /**
     * @var bool
     */
    public $isEnabled;
    protected $_name = [
        'isEnabled' => 'IsEnabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isEnabled) {
            $res['IsEnabled'] = $this->isEnabled;
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
        if (isset($map['IsEnabled'])) {
            $model->isEnabled = $map['IsEnabled'];
        }

        return $model;
    }
}
