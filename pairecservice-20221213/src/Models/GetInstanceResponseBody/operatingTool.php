<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class operatingTool extends Model
{
    /**
     * @var bool
     */
    public $isEnable;
    protected $_name = [
        'isEnable' => 'IsEnable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isEnable) {
            $res['IsEnable'] = $this->isEnable;
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
        if (isset($map['IsEnable'])) {
            $model->isEnable = $map['IsEnable'];
        }

        return $model;
    }
}
