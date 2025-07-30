<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class ServiceSpec extends Model
{
    /**
     * @var int
     */
    public $defaultPort;

    /**
     * @var int[]
     */
    public $extraPorts;

    /**
     * @var string
     */
    public $serviceMode;
    protected $_name = [
        'defaultPort' => 'DefaultPort',
        'extraPorts' => 'ExtraPorts',
        'serviceMode' => 'ServiceMode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultPort) {
            $res['DefaultPort'] = $this->defaultPort;
        }
        if (null !== $this->extraPorts) {
            $res['ExtraPorts'] = $this->extraPorts;
        }
        if (null !== $this->serviceMode) {
            $res['ServiceMode'] = $this->serviceMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ServiceSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultPort'])) {
            $model->defaultPort = $map['DefaultPort'];
        }
        if (isset($map['ExtraPorts'])) {
            if (!empty($map['ExtraPorts'])) {
                $model->extraPorts = $map['ExtraPorts'];
            }
        }
        if (isset($map['ServiceMode'])) {
            $model->serviceMode = $map['ServiceMode'];
        }

        return $model;
    }
}
