<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\GetDbProxyInstanceSslResponseBody\dbProxyCertListItems;

use AlibabaCloud\Dara\Model;

class dbProxyCertListItems extends Model
{
    /**
     * @var string
     */
    public $certCommonName;

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
    public $sslExpiredTime;
    protected $_name = [
        'certCommonName' => 'CertCommonName',
        'dbInstanceName' => 'DbInstanceName',
        'endpointName' => 'EndpointName',
        'endpointType' => 'EndpointType',
        'sslExpiredTime' => 'SslExpiredTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
