<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeOnDemandInstanceStatusResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description The details of route advertisement for data centers outside the Chinese mainland. This parameter is a JSON string. The following fields are included in the value:
     *
     *   **region**: The code of the data center outside the Chinese mainland. The value is of the STRING type. For more information, see **Codes of data centers outside the Chinese mainland**.
     *   **declared**: indicates whether the data center advertised the route. The value is of the STRING type. Valid values: **0** and **1**. The value of 0 indicates that the data center did not advertise the route. The value of 1 indicates that the data center advertised the route.
     *
     * @example [{\"region\":\"oe24\",\"declared\":0},{\"region\":\"oe26\",\"declared\":0},{\"region\":\"oe28\",\"declared\":0},{\"region\":\"oi39\",\"declared\":0},{\"region\":\"us50\",\"declared\":0},{\"region\":\"jp141\",\"declared\":0}]
     *
     * @var string
     */
    public $declared;

    /**
     * @description The description of the on-demand instance.
     *
     * >  The value of this parameter is returned only when the information about multiple on-demand instances is returned. The value of this parameter is not returned because the information about only one on-demand instance is returned.
     * @example test
     *
     * @var string
     */
    public $desc;

    /**
     * @description The ID of the on-demand instance.
     *
     * >  The value of this parameter is returned only when the information about multiple on-demand instances is returned. The value of this parameter is not returned because the information about only one on-demand instance is returned.
     * @example ddosbgp-cn-z2q1qzxb****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The mode used to start the on-demand instance. Valid values:
     *
     *   **manual**: The instance is manually started.
     *   **netflow-auto**: The instance is automatically started by using NetFlow that monitors network traffic.
     *
     * @example netflow-auto
     *
     * @var string
     */
    public $mode;

    /**
     * @description The CIDR block of the on-demand instance.
     *
     * @example 47.***.***.0/24
     *
     * @var string
     */
    public $net;

    /**
     * @description The number of the autonomous system (AS). Set the value to **0**, which indicates that AS is disabled.
     *
     * @example 0
     *
     * @var string
     */
    public $registedAs;

    /**
     * @description The ID of the Alibaba Cloud account.
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
