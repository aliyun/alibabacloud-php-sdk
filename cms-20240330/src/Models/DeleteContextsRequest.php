<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class DeleteContextsRequest extends Model
{
    /**
     * @var string
     */
    public $contextIds;

    /**
     * @var string
     */
    public $filter;
    protected $_name = [
        'contextIds' => 'contextIds',
        'filter' => 'filter',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contextIds) {
            $res['contextIds'] = $this->contextIds;
        }

        if (null !== $this->filter) {
            $res['filter'] = $this->filter;
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
        if (isset($map['contextIds'])) {
            $model->contextIds = $map['contextIds'];
        }

        if (isset($map['filter'])) {
            $model->filter = $map['filter'];
        }

        return $model;
    }
}
