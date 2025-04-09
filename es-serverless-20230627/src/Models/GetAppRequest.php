<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models;

use AlibabaCloud\Dara\Model;

class GetAppRequest extends Model
{
    /**
     * @var bool
     */
    public $detailed;
    protected $_name = [
        'detailed' => 'detailed',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detailed) {
            $res['detailed'] = $this->detailed;
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
        if (isset($map['detailed'])) {
            $model->detailed = $map['detailed'];
        }

        return $model;
    }
}
