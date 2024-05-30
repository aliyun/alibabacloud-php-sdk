<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\GetUserResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
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
     * @return data
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
