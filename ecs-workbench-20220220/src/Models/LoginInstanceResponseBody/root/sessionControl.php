<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceResponseBody\root;

use AlibabaCloud\Tea\Model;

class sessionControl extends Model
{
    /**
     * @example abc
     *
     * @var string
     */
    public $baseUrl;
    protected $_name = [
        'baseUrl' => 'BaseUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseUrl) {
            $res['BaseUrl'] = $this->baseUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sessionControl
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseUrl'])) {
            $model->baseUrl = $map['BaseUrl'];
        }

        return $model;
    }
}
