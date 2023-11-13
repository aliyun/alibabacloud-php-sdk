<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCCRulesResponseBody\webCCRules;
use AlibabaCloud\Tea\Model;

class DescribeWebCCRulesResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example EAED912D-909E-45F0-AF74-AC0CCDCAE314
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of returned custom frequency control rules.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description An array that consists of the details of the custom frequency control rule.
     *
     * @var webCCRules[]
     */
    public $webCCRules;
    protected $_name = [
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
        'webCCRules' => 'WebCCRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
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
