<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyDataSourceDeployRequest\extend;

use AlibabaCloud\Tea\Model;

class oss extends Model
{
    /**
     * @description The path of the OSS data source.
     *
     * @example oss://test
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'path' => 'path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return oss
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        return $model;
    }
}
