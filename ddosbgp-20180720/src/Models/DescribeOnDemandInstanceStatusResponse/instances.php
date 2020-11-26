<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeOnDemandInstanceStatusResponse;

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
    public $net;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $registedAs;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $declared;

    /**
     * @var string
     */
    public $mode;
    protected $_name = [
        'userId'     => 'UserId',
        'net'        => 'Net',
        'instanceId' => 'InstanceId',
        'registedAs' => 'RegistedAs',
        'desc'       => 'Desc',
        'declared'   => 'Declared',
        'mode'       => 'Mode',
    ];

    public function validate()
    {
        Model::validateRequired('userId', $this->userId, true);
        Model::validateRequired('net', $this->net, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('registedAs', $this->registedAs, true);
        Model::validateRequired('desc', $this->desc, true);
        Model::validateRequired('declared', $this->declared, true);
        Model::validateRequired('mode', $this->mode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->net) {
            $res['Net'] = $this->net;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->registedAs) {
            $res['RegistedAs'] = $this->registedAs;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->declared) {
            $res['Declared'] = $this->declared;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
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
        if (isset($map['Net'])) {
            $model->net = $map['Net'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegistedAs'])) {
            $model->registedAs = $map['RegistedAs'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['Declared'])) {
            $model->declared = $map['Declared'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        return $model;
    }
}
