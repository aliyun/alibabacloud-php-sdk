<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListAppServicesPageResponseBody\data;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The group to which the service belongs. You can create a custom group.
     *
     * @example hc4fs1****@98314c8790b****
     *
     * @var string
     */
    public $edasAppId;

    /**
     * @description The total number of instances.
     *
     * @example cn-zhangjiakou-micro-service-******
     *
     * @var string
     */
    public $edasAppName;

    /**
     * @description The HTTP status code. Valid values:
     *
     *   **2xx**: indicates that the call was successful.
     *   **3xx**: indicates that the call was redirected.
     *   **4xx**: indicates that the call failed.
     *   **5xx**: indicates that a server error occurred.
     *
     * @example springCloud
     *
     * @var string
     */
    public $group;

    /**
     * @description The name of the service.
     *
     * @example 1
     *
     * @var int
     */
    public $instanceNum;

    /**
     * @description The returned error code. Valid values:
     *
     * - If the call is successful, the **ErrorCode** parameter is not returned.
     * - If the call fails, the **ErrorCode** parameter is returned. For more information, see the "**Error codes**" section of this topic.
     * @example edas.service.provider
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The ID of the application.
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'edasAppId'   => 'EdasAppId',
        'edasAppName' => 'EdasAppName',
        'group'       => 'Group',
        'instanceNum' => 'InstanceNum',
        'serviceName' => 'ServiceName',
        'version'     => 'Version',
    ];

    public function validate()
    {
    }

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
