<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetUserStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Customer type.
     *
     * @example official
     *
     * @var string
     */
    public $customerType;

    /**
     * @description End date.
     *
     * @example 2023-09-28 00:00:00
     *
     * @var string
     */
    public $endDate;

    /**
     * @description Instance ID.
     *
     * @example 726cec3c-4887-4354-8c21-c0ad12e10fc2
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Start date.
     *
     * @example 2023-09-20 00:00:00
     *
     * @var string
     */
    public $startDate;

    /**
     * @description Status.
     *
     * @example FirstLogin
     *
     * @var string
     */
    public $status;

    /**
     * @description Version.
     *
     * @example mdrjichu
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'customerType' => 'CustomerType',
        'endDate'      => 'EndDate',
        'instanceId'   => 'InstanceId',
        'startDate'    => 'StartDate',
        'status'       => 'Status',
        'version'      => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customerType) {
            $res['CustomerType'] = $this->customerType;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomerType'])) {
            $model->customerType = $map['CustomerType'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
