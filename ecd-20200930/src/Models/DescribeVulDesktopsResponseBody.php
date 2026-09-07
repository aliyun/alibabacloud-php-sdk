<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeVulDesktopsResponseBody\vulDesktops;

class DescribeVulDesktopsResponseBody extends Model
{
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

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var vulDesktops[]
     */
    public $vulDesktops;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'vulDesktops' => 'VulDesktops',
    ];

    public function validate()
    {
        if (\is_array($this->vulDesktops)) {
            Model::validateArray($this->vulDesktops);
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

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->vulDesktops) {
            if (\is_array($this->vulDesktops)) {
                $res['VulDesktops'] = [];
                $n1 = 0;
                foreach ($this->vulDesktops as $item1) {
                    $res['VulDesktops'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['VulDesktops'])) {
            if (!empty($map['VulDesktops'])) {
                $model->vulDesktops = [];
                $n1 = 0;
                foreach ($map['VulDesktops'] as $item1) {
                    $model->vulDesktops[$n1] = vulDesktops::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
