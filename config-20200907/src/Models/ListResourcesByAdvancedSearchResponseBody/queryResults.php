<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListResourcesByAdvancedSearchResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\ListResourcesByAdvancedSearchResponseBody\queryResults\queryResultList;

class queryResults extends Model
{
    /**
     * @var queryResultList
     */
    public $queryResultList;
    protected $_name = [
        'queryResultList' => 'QueryResultList',
    ];

    public function validate()
    {
        if (null !== $this->queryResultList) {
            $this->queryResultList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->queryResultList) {
            $res['QueryResultList'] = null !== $this->queryResultList ? $this->queryResultList->toArray($noStream) : $this->queryResultList;
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
        if (isset($map['QueryResultList'])) {
            $model->queryResultList = queryResultList::fromMap($map['QueryResultList']);
        }

        return $model;
    }
}
