<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListAppServicesPageResponseBody\data;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example hc4fs1****@98314c8790b****
     *
     * @var string
     */
    public $edasAppId;

    /**
     * @description The name of the application.
     *
     * @example cn-zhangjiakou-micro-service-******
     *
     * @var string
     */
    public $edasAppName;

    /**
     * @description The group to which the service belongs. You can create a custom group.
     *
     * @example springCloud
     *
     * @var string
     */
    public $group;

    /**
     * @description The number of instances.
     *
     * @example 1
     *
     * @var int
     */
    public $instanceNum;

    /**
     * @description The service name.
     *
     * @example edas.service.provider
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The version of a service. You can create a custom version.
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'edasAppId' => 'EdasAppId',
        'edasAppName' => 'EdasAppName',
        'group' => 'Group',
        'instanceNum' => 'InstanceNum',
        'serviceName' => 'ServiceName',
        'version' => 'Version',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->edasAppId) {
            $res['EdasAppId'] = $this->edasAppId;
        }
        if (null !== $this->edasAppName) {
            $res['EdasAppName'] = $this->edasAppName;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->instanceNum) {
            $res['InstanceNum'] = $this->instanceNum;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EdasAppId'])) {
            $model->edasAppId = $map['EdasAppId'];
        }
        if (isset($map['EdasAppName'])) {
            $model->edasAppName = $map['EdasAppName'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['InstanceNum'])) {
            $model->instanceNum = $map['InstanceNum'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
