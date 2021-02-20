<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models;

use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeTaskBriefInfoResponseBody\brief;
use AlibabaCloud\SDK\Avds\V20171129\Models\DescribeTaskBriefInfoResponseBody\risksFacets;
use AlibabaCloud\Tea\Model;

class DescribeTaskBriefInfoResponseBody extends Model
{
    /**
     * @var risksFacets
     */
    public $risksFacets;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var brief
     */
    public $brief;
    protected $_name = [
        'risksFacets' => 'RisksFacets',
        'requestId'   => 'RequestId',
        'brief'       => 'Brief',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->risksFacets) {
            $res['RisksFacets'] = null !== $this->risksFacets ? $this->risksFacets->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->brief) {
            $res['Brief'] = null !== $this->brief ? $this->brief->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTaskBriefInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RisksFacets'])) {
            $model->risksFacets = risksFacets::fromMap($map['RisksFacets']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Brief'])) {
            $model->brief = brief::fromMap($map['Brief']);
        }

        return $model;
    }
}
