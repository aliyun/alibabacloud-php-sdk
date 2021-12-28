<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration;

use AlibabaCloud\Tea\Model;

class multiBuffer extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $pollDelay;
    protected $_name = [
        'enabled'   => 'Enabled',
        'pollDelay' => 'PollDelay',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->pollDelay) {
            $res['PollDelay'] = $this->pollDelay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return multiBuffer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['PollDelay'])) {
            $model->pollDelay = $map['PollDelay'];
        }

        return $model;
    }
}
