<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCCloudAssistantStatusResponseBody\instanceCloudAssistantStatusSet;

class DescribeRCCloudAssistantStatusResponseBody extends Model
{
    /**
     * @var instanceCloudAssistantStatusSet[]
     */
    public $instanceCloudAssistantStatusSet;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'instanceCloudAssistantStatusSet' => 'InstanceCloudAssistantStatusSet',
        'nextToken' => 'NextToken',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->instanceCloudAssistantStatusSet)) {
            Model::validateArray($this->instanceCloudAssistantStatusSet);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceCloudAssistantStatusSet) {
            if (\is_array($this->instanceCloudAssistantStatusSet)) {
                $res['InstanceCloudAssistantStatusSet'] = [];
                $n1 = 0;
                foreach ($this->instanceCloudAssistantStatusSet as $item1) {
                    $res['InstanceCloudAssistantStatusSet'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['InstanceCloudAssistantStatusSet'])) {
            if (!empty($map['InstanceCloudAssistantStatusSet'])) {
                $model->instanceCloudAssistantStatusSet = [];
                $n1 = 0;
                foreach ($map['InstanceCloudAssistantStatusSet'] as $item1) {
                    $model->instanceCloudAssistantStatusSet[$n1] = instanceCloudAssistantStatusSet::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
