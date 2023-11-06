<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class CreateAggregateAdvancedSearchFileRequest extends Model
{
    /**
     * @description The ID of the account group.
     *
     * For more information about how to obtain the ID of an account group, see [ListAggregators](~~255797~~).
     * @example ca-edd3626622af00b3****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The SQL statement used to query resources.
     *
     * @example SELECT * WHERE ResourceType = \"ACS::ECS::Instance\"
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
     * @return CreateAggregateAdvancedSearchFileRequest
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
