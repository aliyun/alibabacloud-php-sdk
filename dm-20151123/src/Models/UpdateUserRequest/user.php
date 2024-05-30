<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\UpdateUserRequest;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $enableEventbridge;
    protected $_name = [
        'enableEventbridge' => 'EnableEventbridge',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableEventbridge) {
            $res['EnableEventbridge'] = $this->enableEventbridge;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return user
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableEventbridge'])) {
            $model->enableEventbridge = $map['EnableEventbridge'];
        }

        return $model;
    }
}
