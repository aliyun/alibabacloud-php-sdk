<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListResourcesByAdvancedSearchResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\ListResourcesByAdvancedSearchResponseBody\queryResults\queryResultList;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queryResultList) {
            $res['QueryResultList'] = null !== $this->queryResultList ? $this->queryResultList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queryResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QueryResultList'])) {
            $model->queryResultList = queryResultList::fromMap($map['QueryResultList']);
        }

        return $model;
    }
}
