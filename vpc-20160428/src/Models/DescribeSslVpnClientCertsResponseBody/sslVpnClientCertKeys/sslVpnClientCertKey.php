<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSslVpnClientCertsResponseBody\sslVpnClientCertKeys;

use AlibabaCloud\Tea\Model;

class sslVpnClientCertKey extends Model
{
    /**
     * @description The timestamp that indicates when the SSL client certificate was created. Unit: milliseconds.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     * @example 1492747187000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The timestamp that indicates when the SSL client certificate expires. Unit: milliseconds.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     * @example 1494966335000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The name of the SSL client certificate.
     *
     * @example cert1
     *
     * @var string
     */
    public $name;

    /**
     * @description The region where the SSL client certificate is created.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the SSL client certificate.
     *
     * @example vsc-bp1n8wcf134yl0osr****
     *
     * @var string
     */
    public $sslVpnClientCertId;

    /**
     * @description The ID of the SSL server.
     *
     * @example vss-bp18q7hzj6largv4v****
     *
     * @var string
     */
    public $sslVpnServerId;

    /**
     * @description The status of the SSL client certificate. Valid values:
     *
     *   **expiring-soon**: The certificate expires in one week.
     *   **normal**: The certificate is active.
     *   **expired**: The certificate has expired.
     *
     * @example normal
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime'         => 'CreateTime',
        'endTime'            => 'EndTime',
        'name'               => 'Name',
        'regionId'           => 'RegionId',
        'sslVpnClientCertId' => 'SslVpnClientCertId',
        'sslVpnServerId'     => 'SslVpnServerId',
        'status'             => 'Status',
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sslVpnClientCertId) {
            $res['SslVpnClientCertId'] = $this->sslVpnClientCertId;
        }
        if (null !== $this->sslVpnServerId) {
            $res['SslVpnServerId'] = $this->sslVpnServerId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SslVpnClientCertId'])) {
            $model->sslVpnClientCertId = $map['SslVpnClientCertId'];
        }
        if (isset($map['SslVpnServerId'])) {
            $model->sslVpnServerId = $map['SslVpnServerId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
