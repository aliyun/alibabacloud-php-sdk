<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCCRulesResponseBody\webCCRules;
use AlibabaCloud\Tea\Model;

class DescribeWebCCRulesResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var webCCRules[]
     */
    public $webCCRules;
    protected $_name = [
        'totalCount' => 'TotalCount',
        'requestId'  => 'RequestId',
        'webCCRules' => 'WebCCRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->webCCRules) {
            $res['WebCCRules'] = [];
            if (null !== $this->webCCRules && \is_array($this->webCCRules)) {
                $n = 0;
                foreach ($this->webCCRules as $item) {
                    $res['WebCCRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWebCCRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WebCCRules'])) {
            if (!empty($map['WebCCRules'])) {
                $model->webCCRules = [];
                $n                 = 0;
                foreach ($map['WebCCRules'] as $item) {
                    $model->webCCRules[$n++] = null !== $item ? webCCRules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
