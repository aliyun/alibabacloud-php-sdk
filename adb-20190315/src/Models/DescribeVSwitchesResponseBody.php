<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeVSwitchesResponseBody\vSwitches;
use AlibabaCloud\Tea\Model;

class DescribeVSwitchesResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example D65A809F-34CE-4550-9BC1-0ED21ETG380
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The queried vSwitches.
     *
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
     * @return DescribeVSwitchesResponseBody
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
