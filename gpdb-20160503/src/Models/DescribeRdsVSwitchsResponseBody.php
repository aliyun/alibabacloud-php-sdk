<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRdsVSwitchsResponseBody\vSwitches;

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
        if (null !== $this->vSwitches) {
            $this->vSwitches->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->vSwitches) {
            $res['VSwitches'] = null !== $this->vSwitches ? $this->vSwitches->toArray($noStream) : $this->vSwitches;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
