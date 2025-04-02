<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryConfigResponseBody\data;

use AlibabaCloud\Dara\Model;

class nacosRunningEnv extends Model
{
    /**
     * @var bool
     */
    public $emptyProtect;
    protected $_name = [
        'emptyProtect' => 'emptyProtect',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->emptyProtect) {
            $res['emptyProtect'] = $this->emptyProtect;
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
        if (isset($map['emptyProtect'])) {
            $model->emptyProtect = $map['emptyProtect'];
        }

        return $model;
    }
}
