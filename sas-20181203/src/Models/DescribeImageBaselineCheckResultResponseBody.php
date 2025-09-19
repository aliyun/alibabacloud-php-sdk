<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineCheckResultResponseBody\baselineResult;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineCheckResultResponseBody\pageInfo;

class DescribeImageBaselineCheckResultResponseBody extends Model
{
    /**
     * @var baselineResult[]
     */
    public $baselineResult;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'baselineResult' => 'BaselineResult',
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->baselineResult)) {
            Model::validateArray($this->baselineResult);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baselineResult) {
            if (\is_array($this->baselineResult)) {
                $res['BaselineResult'] = [];
                $n1 = 0;
                foreach ($this->baselineResult as $item1) {
                    $res['BaselineResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['BaselineResult'])) {
            if (!empty($map['BaselineResult'])) {
                $model->baselineResult = [];
                $n1 = 0;
                foreach ($map['BaselineResult'] as $item1) {
                    $model->baselineResult[$n1] = baselineResult::fromMap($item1);
                    ++$n1;
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
