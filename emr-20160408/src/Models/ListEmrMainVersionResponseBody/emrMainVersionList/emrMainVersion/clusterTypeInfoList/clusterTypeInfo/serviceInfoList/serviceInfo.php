<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrMainVersionResponseBody\emrMainVersionList\emrMainVersion\clusterTypeInfoList\clusterTypeInfo\serviceInfoList;

use AlibabaCloud\Tea\Model;

class serviceInfo extends Model
{
    /**
     * @var bool
     */
    public $display;

    /**
     * @var bool
     */
    public $mandatory;

    /**
     * @var string
     */
    public $serviceDisplayName;

    /**
     * @var string
     */
    public $serviceDisplayVersion;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $serviceVersion;
    protected $_name = [
        'display'               => 'Display',
        'mandatory'             => 'Mandatory',
        'serviceDisplayName'    => 'ServiceDisplayName',
        'serviceDisplayVersion' => 'ServiceDisplayVersion',
        'serviceName'           => 'ServiceName',
        'serviceVersion'        => 'ServiceVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->display) {
            $res['Display'] = $this->display;
        }
        if (null !== $this->mandatory) {
            $res['Mandatory'] = $this->mandatory;
        }
        if (null !== $this->serviceDisplayName) {
            $res['ServiceDisplayName'] = $this->serviceDisplayName;
        }
        if (null !== $this->serviceDisplayVersion) {
            $res['ServiceDisplayVersion'] = $this->serviceDisplayVersion;
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
     * @return serviceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Display'])) {
            $model->display = $map['Display'];
        }
        if (isset($map['Mandatory'])) {
            $model->mandatory = $map['Mandatory'];
        }
        if (isset($map['ServiceDisplayName'])) {
            $model->serviceDisplayName = $map['ServiceDisplayName'];
        }
        if (isset($map['ServiceDisplayVersion'])) {
            $model->serviceDisplayVersion = $map['ServiceDisplayVersion'];
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
