<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrMainVersionResponseBody\emrMainVersionList\emrMainVersion\clusterTypeInfoList\clusterTypeInfo\serviceInfoList;

use AlibabaCloud\Tea\Model;

class serviceInfo extends Model
{
    /**
     * @var string
     */
    public $serviceDisplayName;

    /**
     * @var string
     */
    public $serviceVersion;

    /**
     * @var bool
     */
    public $display;

    /**
     * @var string
     */
    public $serviceDisplayVersion;

    /**
     * @var bool
     */
    public $mandatory;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'serviceDisplayName'    => 'ServiceDisplayName',
        'serviceVersion'        => 'ServiceVersion',
        'display'               => 'Display',
        'serviceDisplayVersion' => 'ServiceDisplayVersion',
        'mandatory'             => 'Mandatory',
        'serviceName'           => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceDisplayName) {
            $res['ServiceDisplayName'] = $this->serviceDisplayName;
        }
        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }
        if (null !== $this->display) {
            $res['Display'] = $this->display;
        }
        if (null !== $this->serviceDisplayVersion) {
            $res['ServiceDisplayVersion'] = $this->serviceDisplayVersion;
        }
        if (null !== $this->mandatory) {
            $res['Mandatory'] = $this->mandatory;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceDisplayName'])) {
            $model->serviceDisplayName = $map['ServiceDisplayName'];
        }
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }
        if (isset($map['Display'])) {
            $model->display = $map['Display'];
        }
        if (isset($map['ServiceDisplayVersion'])) {
            $model->serviceDisplayVersion = $map['ServiceDisplayVersion'];
        }
        if (isset($map['Mandatory'])) {
            $model->mandatory = $map['Mandatory'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
