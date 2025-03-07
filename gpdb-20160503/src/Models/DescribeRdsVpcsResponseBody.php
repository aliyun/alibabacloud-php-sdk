<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRdsVpcsResponseBody\vpcs;
use AlibabaCloud\Tea\Model;

class DescribeRdsVpcsResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 53924AF0-1628-5AA2-9C95-D4**********
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The queried VPCs.
     *
     * @var vpcs
     */
    public $vpcs;
    protected $_name = [
        'requestId' => 'RequestId',
        'vpcs'      => 'Vpcs',
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
        if (null !== $this->vpcs) {
            $res['Vpcs'] = null !== $this->vpcs ? $this->vpcs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRdsVpcsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Vpcs'])) {
            $model->vpcs = vpcs::fromMap($map['Vpcs']);
        }

        return $model;
    }
}
