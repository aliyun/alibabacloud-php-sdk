<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;

class ListSyslogsRequest extends Model
{
    /**
     * @var string
     */
    public $fromTime;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $query;

    /**
     * @var bool
     */
    public $reverse;

    /**
     * @var string
     */
    public $toTime;
    protected $_name = [
        'fromTime' => 'FromTime',
        'nextToken' => 'NextToken',
        'nodeId' => 'NodeId',
        'query' => 'Query',
        'reverse' => 'Reverse',
        'toTime' => 'ToTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fromTime) {
            $res['FromTime'] = $this->fromTime;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->reverse) {
            $res['Reverse'] = $this->reverse;
        }

        if (null !== $this->toTime) {
            $res['ToTime'] = $this->toTime;
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
        if (isset($map['FromTime'])) {
            $model->fromTime = $map['FromTime'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['Reverse'])) {
            $model->reverse = $map['Reverse'];
        }

        if (isset($map['ToTime'])) {
            $model->toTime = $map['ToTime'];
        }

        return $model;
    }
}
