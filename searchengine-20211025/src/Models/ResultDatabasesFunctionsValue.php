<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class ResultDatabasesFunctionsValue extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $signatures;
    protected $_name = [
        'name' => 'name',
        'signatures' => 'signatures',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->signatures) {
            $res['signatures'] = $this->signatures;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['signatures'])) {
            $model->signatures = $map['signatures'];
        }

        return $model;
    }
}
