<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\matchRequest;

use AlibabaCloud\Tea\Model;

class headers extends Model
{
    /**
     * @description The header value to be matched.
     *
     * @example v1
     *
     * @var string
     */
    public $matchingContent;

    /**
     * @description The matching mode for the header value. Valid values:
     *
     *   `exact`: exact match
     *   `prefix`: match by prefix
     *   `regex`: match by regular expression
     *
     * @example exact
     *
     * @var string
     */
    public $matchingMode;

    /**
     * @description The header key to be matched.
     *
     * @example x-request-id
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'matchingContent' => 'MatchingContent',
        'matchingMode'    => 'MatchingMode',
        'name'            => 'Name',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return headers
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
