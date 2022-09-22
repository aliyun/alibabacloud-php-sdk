<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeTransitionVpcAndVSwitchResponseBody\vmTransitionModels;
use AlibabaCloud\Tea\Model;

class DescribeTransitionVpcAndVSwitchResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var vmTransitionModels
     */
    public $vmTransitionModels;
    protected $_name = [
        'requestId'          => 'RequestId',
        'vmTransitionModels' => 'VmTransitionModels',
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
        if (null !== $this->vmTransitionModels) {
            $res['VmTransitionModels'] = null !== $this->vmTransitionModels ? $this->vmTransitionModels->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTransitionVpcAndVSwitchResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VmTransitionModels'])) {
            $model->vmTransitionModels = vmTransitionModels::fromMap($map['VmTransitionModels']);
        }

        return $model;
    }
}
