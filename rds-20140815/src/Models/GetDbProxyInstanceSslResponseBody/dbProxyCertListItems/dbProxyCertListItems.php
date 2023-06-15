<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\GetDbProxyInstanceSslResponseBody\dbProxyCertListItems;

use AlibabaCloud\Tea\Model;

class dbProxyCertListItems extends Model
{
    /**
     * @description The dedicated proxy endpoint for which SSL encryption is enabled.
     *
     * @example test1234.rwlb.rds.aliyuncs.com
     *
     * @var string
     */
    public $certCommonName;

    /**
     * @description The ID of the instance.
     *
     * @example rm-t4n3axxxxx
     *
     * @var string
     */
    public $dbInstanceName;

    /**
     * @description The ID of the dedicated proxy endpoint.
     *
     * @example buxxxxxxx
     *
     * @var string
     */
    public $endpointName;

    /**
     * @description The default identifier of the dedicated proxy endpoint. The value is fixed as **RWSplit**.
     *
     * @example RWSplit
     *
     * @var string
     */
    public $endpointType;

    /**
     * @description The time when the certificate expires.
     *
     * @example 2021-12-16T08:43:20Z
     *
     * @var string
     */
    public $sslExpiredTime;
    protected $_name = [
        'certCommonName' => 'CertCommonName',
        'dbInstanceName' => 'DbInstanceName',
        'endpointName'   => 'EndpointName',
        'endpointType'   => 'EndpointType',
        'sslExpiredTime' => 'SslExpiredTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certCommonName) {
            $res['CertCommonName'] = $this->certCommonName;
        }
        if (null !== $this->dbInstanceName) {
            $res['DbInstanceName'] = $this->dbInstanceName;
        }
        if (null !== $this->endpointName) {
            $res['EndpointName'] = $this->endpointName;
        }
        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }
        if (null !== $this->sslExpiredTime) {
            $res['SslExpiredTime'] = $this->sslExpiredTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dbProxyCertListItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertCommonName'])) {
            $model->certCommonName = $map['CertCommonName'];
        }
        if (isset($map['DbInstanceName'])) {
            $model->dbInstanceName = $map['DbInstanceName'];
        }
        if (isset($map['EndpointName'])) {
            $model->endpointName = $map['EndpointName'];
        }
        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }
        if (isset($map['SslExpiredTime'])) {
            $model->sslExpiredTime = $map['SslExpiredTime'];
        }

        return $model;
    }
}
