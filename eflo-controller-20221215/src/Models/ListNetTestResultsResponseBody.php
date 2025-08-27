<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListNetTestResultsResponseBody\netTestResults;

class ListNetTestResultsResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var netTestResults[]
     */
    public $netTestResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'netTestResults' => 'NetTestResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->netTestResults)) {
            Model::validateArray($this->netTestResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->netTestResults) {
            if (\is_array($this->netTestResults)) {
                $res['NetTestResults'] = [];
                $n1 = 0;
                foreach ($this->netTestResults as $item1) {
                    $res['NetTestResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NetTestResults'])) {
            if (!empty($map['NetTestResults'])) {
                $model->netTestResults = [];
                $n1 = 0;
                foreach ($map['NetTestResults'] as $item1) {
                    $model->netTestResults[$n1] = netTestResults::fromMap($item1);
                    ++$n1;
                }
            }
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
