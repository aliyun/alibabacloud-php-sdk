<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateClusterRequest;

use AlibabaCloud\Dara\Model;

class queryNode extends Model
{
    /**
     * @var int
     */
    public $number;
    protected $_name = [
        'number' => 'number',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->number) {
            $res['number'] = $this->number;
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
        if (isset($map['number'])) {
            $model->number = $map['number'];
        }

        return $model;
    }
}
