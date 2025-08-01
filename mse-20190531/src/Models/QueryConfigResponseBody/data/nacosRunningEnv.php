<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryConfigResponseBody\data;

use AlibabaCloud\Tea\Model;

class nacosRunningEnv extends Model
{
    /**
     * @description Indicates whether empty list protection is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $emptyProtect;

    /**
     * @var string
     */
    public $grayAuth;
    protected $_name = [
        'emptyProtect' => 'emptyProtect',
        'grayAuth' => 'grayAuth',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->emptyProtect) {
            $res['emptyProtect'] = $this->emptyProtect;
        }
        if (null !== $this->grayAuth) {
            $res['grayAuth'] = $this->grayAuth;
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
        if (isset($map['grayAuth'])) {
            $model->grayAuth = $map['grayAuth'];
        }

        return $model;
    }
}
