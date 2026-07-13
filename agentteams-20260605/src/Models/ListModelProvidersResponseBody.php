<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListModelProvidersResponseBody\items;

class ListModelProvidersResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var items[]
     */
    public $items;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'code' => 'Code',
        'items' => 'Items',
        'maxResults' => 'MaxResults',
        'message' => 'Message',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['Items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['Items'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['Items'] as $item1) {
                    $model->items[$n1] = items::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
