<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecAbnormalDomainStatisticResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of APIs.
     *
     * @example 10
     *
     * @var int
     */
    public $apiCount;

    /**
     * @description The domain name.
     *
     * @example ba.aliyun.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The number of high-level risks.
     *
     * @example 12
     *
     * @var int
     */
    public $high;

    /**
     * @description The number of low-level risks.
     *
     * @example 4
     *
     * @var int
     */
    public $low;

    /**
     * @description The number of medium-level risks.
     *
     * @example 9
     *
     * @var int
     */
    public $medium;
    protected $_name = [
        'apiCount' => 'ApiCount',
        'domain' => 'Domain',
        'high' => 'High',
        'low' => 'Low',
        'medium' => 'Medium',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiCount) {
            $res['ApiCount'] = $this->apiCount;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->high) {
            $res['High'] = $this->high;
        }
        if (null !== $this->low) {
            $res['Low'] = $this->low;
        }
        if (null !== $this->medium) {
            $res['Medium'] = $this->medium;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiCount'])) {
            $model->apiCount = $map['ApiCount'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['High'])) {
            $model->high = $map['High'];
        }
        if (isset($map['Low'])) {
            $model->low = $map['Low'];
        }
        if (isset($map['Medium'])) {
            $model->medium = $map['Medium'];
        }

        return $model;
    }
}
