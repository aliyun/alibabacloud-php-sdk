<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Tea\Model;

class ListEventBusesRequest extends Model
{
    /**
     * @description The maximum number of entries to be returned in a call. You can use this parameter and NextToken to implement paging. Note: Up to 100 entries can be returned in a call.
     *
     * @example 10
     *
     * @var int
     */
    public $limit;

    /**
     * @description The prefix of the names of the event buses that you want to query.
     *
     * @example My
     *
     * @var string
     */
    public $namePrefix;

    /**
     * @description If you set Limit and excess return values exist, this parameter is returned.
     *
     * @example 10
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'limit'      => 'Limit',
        'namePrefix' => 'NamePrefix',
        'nextToken'  => 'NextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->namePrefix) {
            $res['NamePrefix'] = $this->namePrefix;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEventBusesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['NamePrefix'])) {
            $model->namePrefix = $map['NamePrefix'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
