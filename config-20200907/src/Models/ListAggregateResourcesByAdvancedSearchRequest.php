<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class ListAggregateResourcesByAdvancedSearchRequest extends Model
{
    /**
     * @description The ID of the account group.
     *
     * @example ca-4b05626622af000c****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The SQL statement used to query resources.
     *
     * @example SELECT ResourceId, ResourceName WHERE Tags.Kvpair=\"business:online\"
     *
     * @var string
     */
    public $sql;
    protected $_name = [
        'aggregatorId' => 'AggregatorId',
        'sql'          => 'Sql',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
        }
        if (null !== $this->sql) {
            $res['Sql'] = $this->sql;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAggregateResourcesByAdvancedSearchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }

        return $model;
    }
}
