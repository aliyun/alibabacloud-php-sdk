<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Dara\Model;

class ListAncestorsRequest extends Model
{
    /**
     * @var string
     */
    public $childId;
    protected $_name = [
        'childId' => 'ChildId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->childId) {
            $res['ChildId'] = $this->childId;
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
        if (isset($map['ChildId'])) {
            $model->childId = $map['ChildId'];
        }

        return $model;
    }
}
