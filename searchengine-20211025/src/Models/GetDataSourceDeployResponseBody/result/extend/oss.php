<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDataSourceDeployResponseBody\result\extend;

use AlibabaCloud\Dara\Model;

class oss extends Model
{
    /**
     * @var string
     */
    public $path;
    protected $_name = [
        'path' => 'path',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        return $model;
    }
}
