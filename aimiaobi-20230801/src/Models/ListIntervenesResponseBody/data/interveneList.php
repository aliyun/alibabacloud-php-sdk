<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListIntervenesResponseBody\data;

use AlibabaCloud\Tea\Model;

class interveneList extends Model
{
    /**
     * @description id
     *
     * @example 36559
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $query;
    protected $_name = [
        'id'    => 'Id',
        'query' => 'Query',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return interveneList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        return $model;
    }
}
