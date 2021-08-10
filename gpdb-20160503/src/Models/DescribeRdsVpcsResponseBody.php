<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRdsVpcsResponseBody\vpcs;
use AlibabaCloud\Tea\Model;

class DescribeRdsVpcsResponseBody extends Model
{
    /**
     * @var vpcs
     */
    public $vpcs;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'vpcs'      => 'Vpcs',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcs) {
            $res['Vpcs'] = null !== $this->vpcs ? $this->vpcs->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Vpcs'])) {
            $model->vpcs = vpcs::fromMap($map['Vpcs']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
