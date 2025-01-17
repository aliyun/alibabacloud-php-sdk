<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartJobsResponseBody\smartJobList;

class ListSmartJobsResponseBody extends Model
{
    /**
     * @var string
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
    /**
     * @var smartJobList[]
     */
    public $smartJobList;
    /**
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'requestId'    => 'RequestId',
        'smartJobList' => 'SmartJobList',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->smartJobList)) {
            Model::validateArray($this->smartJobList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->smartJobList) {
            if (\is_array($this->smartJobList)) {
                $res['SmartJobList'] = [];
                $n1                  = 0;
                foreach ($this->smartJobList as $item1) {
                    $res['SmartJobList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SmartJobList'])) {
            if (!empty($map['SmartJobList'])) {
                $model->smartJobList = [];
                $n1                  = 0;
                foreach ($map['SmartJobList'] as $item1) {
                    $model->smartJobList[$n1++] = smartJobList::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
