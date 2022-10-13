<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20190422\Models;

use AlibabaCloud\SDK\Elasticsearch\V20190422\Models\DescribeVSwitchesResponseBody\vSwitches;
use AlibabaCloud\Tea\Model;

class DescribeVSwitchesResponseBody extends Model
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
