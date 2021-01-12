<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\GetDbProxyInstanceSslResponseBody\dbProxyCertListItems;

use AlibabaCloud\Tea\Model;

class dbProxyCertListItems extends Model
{
    /**
     * @var string
     */
    public $dbInstanceName;

    /**
     * @var string
     */
    public $endpointName;

    /**
     * @var string
     */
    public $endpointType;

    /**
     * @var string
     */
    public $certCommonName;

    /**
     * @var string
     */
    public $sslExpiredTime;
    protected $_name = [
        'dbInstanceName' => 'DbInstanceName',
        'endpointName'   => 'EndpointName',
        'endpointType'   => 'EndpointType',
        'certCommonName' => 'CertCommonName',
        'sslExpiredTime' => 'SslExpiredTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbInstanceName) {
            $res['DbInstanceName'] = $this->dbInstanceName;
        }
        if (null !== $this->endpointName) {
            $res['EndpointName'] = $this->endpointName;
        }
        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }
        if (null !== $this->certCommonName) {
            $res['CertCommonName'] = $this->certCommonName;
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
        if (isset($map['DbInstanceName'])) {
            $model->dbInstanceName = $map['DbInstanceName'];
        }
        if (isset($map['EndpointName'])) {
            $model->endpointName = $map['EndpointName'];
        }
        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }
        if (isset($map['CertCommonName'])) {
            $model->certCommonName = $map['CertCommonName'];
        }
        if (isset($map['SslExpiredTime'])) {
            $model->sslExpiredTime = $map['SslExpiredTime'];
        }

        return $model;
    }
}
