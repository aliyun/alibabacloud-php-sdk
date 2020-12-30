<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeOnDemandInstanceStatusResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $declared;

    /**
     * @var string
     */
    public $registedAs;

    /**
     * @var string
     */
    public $net;

    /**
     * @var string
     */
    public $desc;
    protected $_name = [
        'userId'     => 'UserId',
        'mode'       => 'Mode',
        'instanceId' => 'InstanceId',
        'declared'   => 'Declared',
        'registedAs' => 'RegistedAs',
        'net'        => 'Net',
        'desc'       => 'Desc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->declared) {
            $res['Declared'] = $this->declared;
        }
        if (null !== $this->registedAs) {
            $res['RegistedAs'] = $this->registedAs;
        }
        if (null !== $this->net) {
            $res['Net'] = $this->net;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Declared'])) {
            $model->declared = $map['Declared'];
        }
        if (isset($map['RegistedAs'])) {
            $model->registedAs = $map['RegistedAs'];
        }
        if (isset($map['Net'])) {
            $model->net = $map['Net'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        return $model;
    }
}
