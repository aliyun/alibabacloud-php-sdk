<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSslVpnClientCertsResponseBody\sslVpnClientCertKeys;

use AlibabaCloud\Tea\Model;

class sslVpnClientCertKey extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $sslVpnClientCertId;

    /**
     * @var string
     */
    public $sslVpnServerId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'status'             => 'Status',
        'endTime'            => 'EndTime',
        'createTime'         => 'CreateTime',
        'sslVpnClientCertId' => 'SslVpnClientCertId',
        'sslVpnServerId'     => 'SslVpnServerId',
        'name'               => 'Name',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->sslVpnClientCertId) {
            $res['SslVpnClientCertId'] = $this->sslVpnClientCertId;
        }
        if (null !== $this->sslVpnServerId) {
            $res['SslVpnServerId'] = $this->sslVpnServerId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sslVpnClientCertKey
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SslVpnClientCertId'])) {
            $model->sslVpnClientCertId = $map['SslVpnClientCertId'];
        }
        if (isset($map['SslVpnServerId'])) {
            $model->sslVpnServerId = $map['SslVpnServerId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
