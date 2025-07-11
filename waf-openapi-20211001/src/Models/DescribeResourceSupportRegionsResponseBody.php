<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeResourceSupportRegionsResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 58FD****-3D56-5DE8-91E0-96A26BABFFDD
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array of region IDs of the CLB and ECS instances that are added to WAF in cloud native mode.
     *
     * @var string[]
     */
    public $supportRegions;
    protected $_name = [
        'requestId' => 'RequestId',
        'supportRegions' => 'SupportRegions',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->supportRegions) {
            $res['SupportRegions'] = $this->supportRegions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourceSupportRegionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SupportRegions'])) {
            if (!empty($map['SupportRegions'])) {
                $model->supportRegions = $map['SupportRegions'];
            }
        }

        return $model;
    }
}
