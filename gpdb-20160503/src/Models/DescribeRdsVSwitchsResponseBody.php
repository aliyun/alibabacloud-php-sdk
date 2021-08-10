<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRdsVSwitchsResponseBody\vSwitches;
use AlibabaCloud\Tea\Model;

class DescribeRdsVSwitchsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var vSwitches
     */
    public $vSwitches;
    protected $_name = [
        'requestId' => 'RequestId',
        'vSwitches' => 'VSwitches',
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
        if (null !== $this->vSwitches) {
            $res['VSwitches'] = null !== $this->vSwitches ? $this->vSwitches->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRdsVSwitchsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VSwitches'])) {
            $model->vSwitches = vSwitches::fromMap($map['VSwitches']);
        }

        return $model;
    }
}
