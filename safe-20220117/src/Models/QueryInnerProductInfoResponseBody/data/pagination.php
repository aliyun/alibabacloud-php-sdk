<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\QueryInnerProductInfoResponseBody\data;

use AlibabaCloud\Dara\Model;

class pagination extends Model
{
    /**
     * @var int
     */
    public $limit;

    /**
     * @var int
     */
    public $page;
    protected $_name = [
        'limit' => 'Limit',
        'page' => 'Page',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
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
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        return $model;
    }
}
