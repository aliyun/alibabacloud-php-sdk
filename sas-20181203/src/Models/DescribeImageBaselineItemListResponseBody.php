<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineItemListResponseBody\baselineItemInfos;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineItemListResponseBody\pageInfo;

class DescribeImageBaselineItemListResponseBody extends Model
{
    /**
     * @var baselineItemInfos[]
     */
    public $baselineItemInfos;
    /**
     * @var pageInfo
     */
    public $pageInfo;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'baselineItemInfos' => 'BaselineItemInfos',
        'pageInfo'          => 'PageInfo',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->baselineItemInfos)) {
            Model::validateArray($this->baselineItemInfos);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baselineItemInfos) {
            if (\is_array($this->baselineItemInfos)) {
                $res['BaselineItemInfos'] = [];
                $n1                       = 0;
                foreach ($this->baselineItemInfos as $item1) {
                    $res['BaselineItemInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
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
        if (isset($map['BaselineItemInfos'])) {
            if (!empty($map['BaselineItemInfos'])) {
                $model->baselineItemInfos = [];
                $n1                       = 0;
                foreach ($map['BaselineItemInfos'] as $item1) {
                    $model->baselineItemInfos[$n1++] = baselineItemInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
