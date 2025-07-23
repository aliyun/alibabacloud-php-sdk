<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

class GetUmodelDataRequest extends Model
{
    /**
     * @example {
     * "filter": {
     * "domains": []
     * },
     * "offset": 0,
     * "size": 100000
     * }
     *
     * @var mixed
     */
    public $content;

    /**
     * @description This parameter is required.
     *
     * @example ListData
     *
     * @var string
     */
    public $method;
    protected $_name = [
        'content' => 'content',
        'method' => 'method',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->method) {
            $res['method'] = $this->method;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUmodelDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['method'])) {
            $model->method = $map['method'];
        }

        return $model;
    }
}
