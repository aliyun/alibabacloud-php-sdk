<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Grace\V20220606\Models;

use AlibabaCloud\Tea\Model;

class AnalyzeFileRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $keepUnreachableObjects;

    /**
     * @example 123-456-file.log
     *
     * @var string
     */
    public $name;

    /**
     * @example 6e54e9d5-3147-458e-a85d-bae8722de747
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'keepUnreachableObjects' => 'keepUnreachableObjects',
        'name'                   => 'name',
        'token'                  => 'token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keepUnreachableObjects) {
            $res['keepUnreachableObjects'] = $this->keepUnreachableObjects;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AnalyzeFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['keepUnreachableObjects'])) {
            $model->keepUnreachableObjects = $map['keepUnreachableObjects'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        return $model;
    }
}
