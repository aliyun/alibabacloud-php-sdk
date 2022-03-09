<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\CustomGetCdnModelPathResponseBody;

use AlibabaCloud\Tea\Model;

class resultObj extends Model
{
    /**
     * @var string
     */
    public $path;
    protected $_name = [
        'path' => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObj
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
