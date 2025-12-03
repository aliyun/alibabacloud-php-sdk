<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetTestcaseListResponseBody\testcase;

use AlibabaCloud\Dara\Model;

class tags extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $tagIdentifier;
    protected $_name = [
        'name' => 'name',
        'tagIdentifier' => 'tagIdentifier',
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

        if (null !== $this->tagIdentifier) {
            $res['tagIdentifier'] = $this->tagIdentifier;
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

        if (isset($map['tagIdentifier'])) {
            $model->tagIdentifier = $map['tagIdentifier'];
        }

        return $model;
    }
}
