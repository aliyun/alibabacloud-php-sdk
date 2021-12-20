<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models\ListConnectionPoolAllIpsResponseBody;

use AlibabaCloud\Tea\Model;

class connectionPoolIps extends Model
{
    /**
     * @var string
     */
    public $connectionPoolId;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var int
     */
    public $ipNum;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'connectionPoolId' => 'ConnectionPoolId',
        'ip'               => 'Ip',
        'ipNum'            => 'IpNum',
        'status'           => 'Status',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionPoolId) {
            $res['ConnectionPoolId'] = $this->connectionPoolId;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->ipNum) {
            $res['IpNum'] = $this->ipNum;
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
     * @return connectionPoolIps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionPoolId'])) {
            $model->connectionPoolId = $map['ConnectionPoolId'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['IpNum'])) {
            $model->ipNum = $map['IpNum'];
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
