<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryConfigResponseBody\data;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->emptyProtect) {
            $res['emptyProtect'] = $this->emptyProtect;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nacosRunningEnv
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['emptyProtect'])) {
            $model->emptyProtect = $map['emptyProtect'];
        }

        return $model;
    }
}
