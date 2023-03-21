<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineCheckResultResponseBody\baselineResult;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineCheckResultResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

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
        'pageInfo'       => 'PageInfo',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineResult) {
            $res['BaselineResult'] = [];
            if (null !== $this->baselineResult && \is_array($this->baselineResult)) {
                $n = 0;
                foreach ($this->baselineResult as $item) {
                    $res['BaselineResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageBaselineCheckResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineResult'])) {
            if (!empty($map['BaselineResult'])) {
                $model->baselineResult = [];
                $n                     = 0;
                foreach ($map['BaselineResult'] as $item) {
                    $model->baselineResult[$n++] = null !== $item ? baselineResult::fromMap($item) : $item;
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
