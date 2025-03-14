<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListDockerhubImageRequest extends Model
{
    /**
     * @description Image query condition, supports the format of `[namespace/]repoName[:version]`, where the conditions within `[]` are optional.
     *
     * This parameter is required.
     *
     * @example python:3.9
     *
     * @var string
     */
    public $query;
    protected $_name = [
        'query' => 'Query',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDockerhubImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        return $model;
    }
}
