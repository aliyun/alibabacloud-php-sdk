<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeTransitionVSwitchesResponseBody\vSwitchModels;
use AlibabaCloud\Tea\Model;

class DescribeTransitionVSwitchesResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var vSwitchModels
     */
    public $vSwitchModels;
    protected $_name = [
        'code'          => 'Code',
        'requestId'     => 'RequestId',
        'success'       => 'Success',
        'vSwitchModels' => 'VSwitchModels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->vSwitchModels) {
            $res['VSwitchModels'] = null !== $this->vSwitchModels ? $this->vSwitchModels->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTransitionVSwitchesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['VSwitchModels'])) {
            $model->vSwitchModels = vSwitchModels::fromMap($map['VSwitchModels']);
        }

        return $model;
    }
}
