<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class ListConnectionsRequest extends Model
{
    /**
     * @var string
     */
    public $connectionNamePrefix;

    /**
     * @var string
     */
    public $excludeType;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'connectionNamePrefix' => 'ConnectionNamePrefix',
        'excludeType' => 'ExcludeType',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionNamePrefix) {
            $res['ConnectionNamePrefix'] = $this->connectionNamePrefix;
        }

        if (null !== $this->excludeType) {
            $res['ExcludeType'] = $this->excludeType;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ConnectionNamePrefix'])) {
            $model->connectionNamePrefix = $map['ConnectionNamePrefix'];
        }

        if (isset($map['ExcludeType'])) {
            $model->excludeType = $map['ExcludeType'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
