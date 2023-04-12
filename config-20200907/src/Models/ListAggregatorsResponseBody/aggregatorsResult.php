<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListAggregatorsResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregatorsResponseBody\aggregatorsResult\aggregators;
use AlibabaCloud\Tea\Model;

class aggregatorsResult extends Model
{
    /**
     * @description The information about the account groups.
     *
     * @var aggregators[]
     */
    public $aggregators;

    /**
     * @description The token that is used to initiate the next request. If the response of the current request is truncated, this token is used to initiate another request and obtain the remaining entries.
     *
     * @example TGlzdFJlc291cmNlU2hhcmVzJjE1MTI2NjY4NzY5MTAzOTEmMiZORnI4NDhVeEtrUT0
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'aggregators' => 'Aggregators',
        'nextToken'   => 'NextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregators) {
            $res['Aggregators'] = [];
            if (null !== $this->aggregators && \is_array($this->aggregators)) {
                $n = 0;
                foreach ($this->aggregators as $item) {
                    $res['Aggregators'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aggregatorsResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aggregators'])) {
            if (!empty($map['Aggregators'])) {
                $model->aggregators = [];
                $n                  = 0;
                foreach ($map['Aggregators'] as $item) {
                    $model->aggregators[$n++] = null !== $item ? aggregators::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
