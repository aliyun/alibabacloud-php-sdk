<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeVpcsResponseBody\vpcs;
use AlibabaCloud\Tea\Model;

class DescribeVpcsResponseBody extends Model
{
    /**
     * @example 78BDC895-F7C0-5961-92BE-F1C3D12B4BB5
     *
     * @var string
     */
    public $requestId;

    /**
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
     * @return DescribeVpcsResponseBody
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
