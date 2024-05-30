<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCCRulesV2ResponseBody\webCCRules;
use AlibabaCloud\Tea\Model;

class DescribeWebCCRulesV2ResponseBody extends Model
{
    /**
     * @example www.aliyun.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example CF33B4C3-196E-4015-AADD-5CAD00057B80
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 12
     *
     * @var string
     */
    public $totalCount;

    /**
     * @var webCCRules[]
     */
    public $webCCRules;
    protected $_name = [
        'domain'     => 'Domain',
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
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
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
     * @return DescribeWebCCRulesV2ResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
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
