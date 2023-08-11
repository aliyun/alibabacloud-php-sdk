<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeOnDemandInstanceStatusResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description WB269094
     *
     * @example [{\"region\":\"oe24\",\"declared\":0},{\"region\":\"oe26\",\"declared\":0},{\"region\":\"oe28\",\"declared\":0},{\"region\":\"oi39\",\"declared\":0},{\"region\":\"us50\",\"declared\":0},{\"region\":\"jp141\",\"declared\":0}]
     *
     * @var string
     */
    public $declared;

    /**
     * @example test
     *
     * @var string
     */
    public $desc;

    /**
     * @description DescribeOnDemandInstanceStatus
     *
     * @example ddosbgp-cn-z2q1qzxb****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description All Alibaba Cloud API operations must include common request parameters. For more information about common request parameters, see [Common parameters](~~118841~~).
     *
     * For more information about sample requests, see the **"Examples"** section of this topic.
     * @example netflow-auto
     *
     * @var string
     */
    public $mode;

    /**
     * @example 47.***.***.0/24
     *
     * @var string
     */
    public $net;

    /**
     * @description DescribeOnDemandInstanceStatus
     *
     * @example 0
     *
     * @var string
     */
    public $registedAs;

    /**
     * @description The ID of the request.
     *
     * @example 171986973287****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'declared'   => 'Declared',
        'desc'       => 'Desc',
        'instanceId' => 'InstanceId',
        'mode'       => 'Mode',
        'net'        => 'Net',
        'registedAs' => 'RegistedAs',
        'userId'     => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->declared) {
            $res['Declared'] = $this->declared;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->net) {
            $res['Net'] = $this->net;
        }
        if (null !== $this->registedAs) {
            $res['RegistedAs'] = $this->registedAs;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['Declared'])) {
            $model->declared = $map['Declared'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Net'])) {
            $model->net = $map['Net'];
        }
        if (isset($map['RegistedAs'])) {
            $model->registedAs = $map['RegistedAs'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
