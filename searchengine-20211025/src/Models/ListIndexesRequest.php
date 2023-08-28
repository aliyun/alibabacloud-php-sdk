<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class ListIndexesRequest extends Model
{
    /**
     * @var bool
     */
    public $newMode;
    protected $_name = [
        'newMode' => 'newMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newMode) {
            $res['newMode'] = $this->newMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIndexesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['newMode'])) {
            $model->newMode = $map['newMode'];
        }

        return $model;
    }
}
