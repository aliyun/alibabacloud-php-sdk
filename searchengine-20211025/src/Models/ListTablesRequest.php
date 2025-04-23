<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class ListTablesRequest extends Model
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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->newMode) {
            $res['newMode'] = $this->newMode;
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
        if (isset($map['newMode'])) {
            $model->newMode = $map['newMode'];
        }

        return $model;
    }
}
