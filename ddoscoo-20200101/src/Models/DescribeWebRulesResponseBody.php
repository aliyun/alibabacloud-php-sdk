<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebRulesResponseBody\webRules;
use AlibabaCloud\Tea\Model;

class DescribeWebRulesResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 0F5B72DD-96F4-423A-B12B-A5151DD746B8
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of queried website business forwarding rules.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The configurations of the forwarding rule.
     *
     * @var webRules[]
     */
    public $webRules;
    protected $_name = [
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
        'webRules'   => 'WebRules',
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
        if (null !== $this->webRules) {
            $res['WebRules'] = [];
            if (null !== $this->webRules && \is_array($this->webRules)) {
                $n = 0;
                foreach ($this->webRules as $item) {
                    $res['WebRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWebRulesResponseBody
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
        if (isset($map['WebRules'])) {
            if (!empty($map['WebRules'])) {
                $model->webRules = [];
                $n               = 0;
                foreach ($map['WebRules'] as $item) {
                    $model->webRules[$n++] = null !== $item ? webRules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
