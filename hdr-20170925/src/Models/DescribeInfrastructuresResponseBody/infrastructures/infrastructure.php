<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeInfrastructuresResponseBody\infrastructures;

use AlibabaCloud\Tea\Model;

class infrastructure extends Model
{
    /**
     * @example cdr.console.plugin.failed_to_connect
     *
     * @var string
     */
    public $errno;

    /**
     * @example is-0005qxusucbig0c42dlo
     *
     * @var string
     */
    public $infrastructureId;

    /**
     * @example 172.18.122.66
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @example si-0006w0mxd3w8jiifu77l-infrastructure1
     *
     * @var string
     */
    public $name;

    /**
     * @example connected
     *
     * @var string
     */
    public $status;

    /**
     * @example aliyun
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'errno'            => 'Errno',
        'infrastructureId' => 'InfrastructureId',
        'ipAddress'        => 'IpAddress',
        'name'             => 'Name',
        'status'           => 'Status',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errno) {
            $res['Errno'] = $this->errno;
        }
        if (null !== $this->infrastructureId) {
            $res['InfrastructureId'] = $this->infrastructureId;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return infrastructure
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Errno'])) {
            $model->errno = $map['Errno'];
        }
        if (isset($map['InfrastructureId'])) {
            $model->infrastructureId = $map['InfrastructureId'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
