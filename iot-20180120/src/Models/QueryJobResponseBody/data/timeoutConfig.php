<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobResponseBody\data;

use AlibabaCloud\Dara\Model;

class timeoutConfig extends Model
{
    /**
     * @var int
     */
    public $inProgressTimeoutInMinutes;
    protected $_name = [
        'inProgressTimeoutInMinutes' => 'InProgressTimeoutInMinutes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inProgressTimeoutInMinutes) {
            $res['InProgressTimeoutInMinutes'] = $this->inProgressTimeoutInMinutes;
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
        if (isset($map['InProgressTimeoutInMinutes'])) {
            $model->inProgressTimeoutInMinutes = $map['InProgressTimeoutInMinutes'];
        }

        return $model;
    }
}
