<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class UpdateGatewayRequest extends Model
{
    /**
     * @var bool
     */
    public $enableInternet;

    /**
     * @var bool
     */
    public $enableIntranet;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'enableInternet' => 'EnableInternet',
        'enableIntranet' => 'EnableIntranet',
        'instanceType'   => 'InstanceType',
        'name'           => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableInternet) {
            $res['EnableInternet'] = $this->enableInternet;
        }
        if (null !== $this->enableIntranet) {
            $res['EnableIntranet'] = $this->enableIntranet;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGatewayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableInternet'])) {
            $model->enableInternet = $map['EnableInternet'];
        }
        if (isset($map['EnableIntranet'])) {
            $model->enableIntranet = $map['EnableIntranet'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
