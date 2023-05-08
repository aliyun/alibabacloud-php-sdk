<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\matchRequest;

use AlibabaCloud\Tea\Model;

class URI extends Model
{
    /**
     * @description The configurations for mirroring HTTP traffic to another destination in addition to forwarding requests to the specified destination.
     *
     * @example /ratings/v2/
     *
     * @var string
     */
    public $matchingContent;

    /**
     * @description The percentage of requests that are aborted with the specified error code, expressed as a decimal.
     *
     * @example prefix
     *
     * @var string
     */
    public $matchingMode;
    protected $_name = [
        'matchingContent' => 'MatchingContent',
        'matchingMode'    => 'MatchingMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->matchingContent) {
            $res['MatchingContent'] = $this->matchingContent;
        }
        if (null !== $this->matchingMode) {
            $res['MatchingMode'] = $this->matchingMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return URI
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MatchingContent'])) {
            $model->matchingContent = $map['MatchingContent'];
        }
        if (isset($map['MatchingMode'])) {
            $model->matchingMode = $map['MatchingMode'];
        }

        return $model;
    }
}
