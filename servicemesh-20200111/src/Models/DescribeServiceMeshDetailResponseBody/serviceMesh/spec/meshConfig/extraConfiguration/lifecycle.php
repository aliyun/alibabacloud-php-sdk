<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\lifecycle\postStart;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\lifecycle\preStop;

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
        'postStart' => 'postStart',
        'preStop' => 'preStop',
    ];

    public function validate()
    {
        if (null !== $this->postStart) {
            $this->postStart->validate();
        }
        if (null !== $this->preStop) {
            $this->preStop->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->postStart) {
            $res['postStart'] = null !== $this->postStart ? $this->postStart->toArray($noStream) : $this->postStart;
        }

        if (null !== $this->preStop) {
            $res['preStop'] = null !== $this->preStop ? $this->preStop->toArray($noStream) : $this->preStop;
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
        if (isset($map['postStart'])) {
            $model->postStart = postStart::fromMap($map['postStart']);
        }

        if (isset($map['preStop'])) {
            $model->preStop = preStop::fromMap($map['preStop']);
        }

        return $model;
    }
}
