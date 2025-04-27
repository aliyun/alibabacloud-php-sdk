<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceHistoryEventsRequest;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var bool
     */
    public $desc;

    /**
     * @var string
     */
    public $sortField;
    protected $_name = [
        'desc' => 'desc',
        'sortField' => 'sortField',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }

        if (null !== $this->sortField) {
            $res['sortField'] = $this->sortField;
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
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }

        if (isset($map['sortField'])) {
            $model->sortField = $map['sortField'];
        }

        return $model;
    }
}
