<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\DescribeApplicationGroupBillResponseBody\applicationGroupConsume;

class DescribeApplicationGroupBillResponseBody extends Model
{
    /**
     * @var applicationGroupConsume[]
     */
    public $applicationGroupConsume;

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
        'applicationGroupConsume' => 'ApplicationGroupConsume',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->applicationGroupConsume)) {
            Model::validateArray($this->applicationGroupConsume);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationGroupConsume) {
            if (\is_array($this->applicationGroupConsume)) {
                $res['ApplicationGroupConsume'] = [];
                $n1 = 0;
                foreach ($this->applicationGroupConsume as $item1) {
                    $res['ApplicationGroupConsume'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ApplicationGroupConsume'])) {
            if (!empty($map['ApplicationGroupConsume'])) {
                $model->applicationGroupConsume = [];
                $n1 = 0;
                foreach ($map['ApplicationGroupConsume'] as $item1) {
                    $model->applicationGroupConsume[$n1] = applicationGroupConsume::fromMap($item1);
                    ++$n1;
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
