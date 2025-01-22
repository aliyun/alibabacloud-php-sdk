<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oosops\V20190601\Models\ListUserExecutionsResponseBody\executions;

class ListUserExecutionsResponseBody extends Model
{
    /**
     * @var executions[]
     */
    public $executions;
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
    public $requestId;
    protected $_name = [
        'executions' => 'Executions',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->executions)) {
            Model::validateArray($this->executions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->executions) {
            if (\is_array($this->executions)) {
                $res['Executions'] = [];
                $n1                = 0;
                foreach ($this->executions as $item1) {
                    $res['Executions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Executions'])) {
            if (!empty($map['Executions'])) {
                $model->executions = [];
                $n1                = 0;
                foreach ($map['Executions'] as $item1) {
                    $model->executions[$n1++] = executions::fromMap($item1);
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
