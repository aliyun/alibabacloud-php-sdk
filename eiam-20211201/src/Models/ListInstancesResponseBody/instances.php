<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListInstancesResponseBody;

use AlibabaCloud\SDK\Eiam\V20211201\Models\ListInstancesResponseBody\instances\defaultEndpoint;
use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description The time when the instance was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1550115455000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The default endpoint of the instance.
     *
     * @var defaultEndpoint
     */
    public $defaultEndpoint;

    /**
     * @description The description of the instance.
     *
     * @var string
     */
    public $description;

    /**
     * @description The instance ID.
     *
     * @example idaas_eypq6ljgyeuwmlw672sulxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The status of the instance. Valid values:
     *
     *   creating
     *   running
     *
     * @example running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'defaultEndpoint' => 'DefaultEndpoint',
        'description'     => 'Description',
        'instanceId'      => 'InstanceId',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->defaultEndpoint) {
            $res['DefaultEndpoint'] = null !== $this->defaultEndpoint ? $this->defaultEndpoint->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DefaultEndpoint'])) {
            $model->defaultEndpoint = defaultEndpoint::fromMap($map['DefaultEndpoint']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
