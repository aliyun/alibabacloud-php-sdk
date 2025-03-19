<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetModelResponseBody\result\content\request;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetModelResponseBody\result\content\request\parameters\build;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetModelResponseBody\result\content\request\parameters\search;
use AlibabaCloud\Tea\Model;

class parameters extends Model
{
    /**
     * @var build
     */
    public $build;

    /**
     * @var search
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
            $res['build'] = null !== $this->build ? $this->build->toMap() : null;
        }
        if (null !== $this->search) {
            $res['search'] = null !== $this->search ? $this->search->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['build'])) {
            $model->build = build::fromMap($map['build']);
        }
        if (isset($map['search'])) {
            $model->search = search::fromMap($map['search']);
        }

        return $model;
    }
}
