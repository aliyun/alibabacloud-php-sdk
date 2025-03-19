<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateModelRequest\content\request;

use AlibabaCloud\Tea\Model;

class urlParams extends Model
{
    /**
     * @example key: value
     *
     * @var mixed[]
     */
    public $build;

    /**
     * @example key: value
     *
     * @var mixed[]
     */
    public $search;
    protected $_name = [
        'build' => 'build',
        'search' => 'search',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->build) {
            $res['build'] = $this->build;
        }
        if (null !== $this->search) {
            $res['search'] = $this->search;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return urlParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['build'])) {
            $model->build = $map['build'];
        }
        if (isset($map['search'])) {
            $model->search = $map['search'];
        }

        return $model;
    }
}
