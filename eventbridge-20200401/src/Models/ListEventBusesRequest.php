<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class ListEventBusesRequest extends Model
{
    /**
     * @var int
     */
    public $limit;
    /**
     * @var string
     */
    public $namePrefix;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (isset($map['NamePrefix'])) {
            $model->namePrefix = $map['NamePrefix'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
