<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\lifecycle\postStart;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\lifecycle\preStop;
use AlibabaCloud\Tea\Model;

class lifecycle extends Model
{
    /**
     * @var postStart
     */
    public $postStart;

    /**
     * @var preStop
     */
    public $preStop;
    protected $_name = [
        'postStart' => 'PostStart',
        'preStop'   => 'PreStop',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->postStart) {
            $res['PostStart'] = null !== $this->postStart ? $this->postStart->toMap() : null;
        }
        if (null !== $this->preStop) {
            $res['PreStop'] = null !== $this->preStop ? $this->preStop->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lifecycle
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PostStart'])) {
            $model->postStart = postStart::fromMap($map['PostStart']);
        }
        if (isset($map['PreStop'])) {
            $model->preStop = preStop::fromMap($map['PreStop']);
        }

        return $model;
    }
}
