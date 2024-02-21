<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableConfigResponseBody\emrMainVersionList\emrMainVersion\clusterTypeInfoList\clusterTypeInfo\clusterServiceInfoList;

use AlibabaCloud\Tea\Model;

class clusterServiceInfo extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $mandatory;

    /**
     * @example Hive
     *
     * @var string
     */
    public $serviceDisplayName;

    /**
     * @example HIVE
     *
     * @var string
     */
    public $serviceName;

    /**
     * @example 2.3.3
     *
     * @var string
     */
    public $serviceVersion;
    protected $_name = [
        'mandatory'          => 'Mandatory',
        'serviceDisplayName' => 'ServiceDisplayName',
        'serviceName'        => 'ServiceName',
        'serviceVersion'     => 'ServiceVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mandatory) {
            $res['Mandatory'] = $this->mandatory;
        }
        if (null !== $this->serviceDisplayName) {
            $res['ServiceDisplayName'] = $this->serviceDisplayName;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterServiceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mandatory'])) {
            $model->mandatory = $map['Mandatory'];
        }
        if (isset($map['ServiceDisplayName'])) {
            $model->serviceDisplayName = $map['ServiceDisplayName'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }

        return $model;
    }
}
