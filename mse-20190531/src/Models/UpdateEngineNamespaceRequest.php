<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateEngineNamespaceRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The ID of the cluster.
     *
     * @example mse-09k1q11****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The description of the cluster.
     *
     * @example public
     *
     * @var string
     */
    public $desc;

    /**
     * @description The ID of the namespace.
     *
     * @example 33ff74b6-d21e-4f9b-91a8-bc1ea4ef****
     *
     * @var string
     */
    public $id;

    /**
     * @description The ID of the instance.
     *
     * @example mse-cn-st21ri2****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the cluster.
     *
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of active services.
     *
     * @example 3
     *
     * @var int
     */
    public $serviceCount;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'clusterId'      => 'ClusterId',
        'desc'           => 'Desc',
        'id'             => 'Id',
        'instanceId'     => 'InstanceId',
        'name'           => 'Name',
        'serviceCount'   => 'ServiceCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->serviceCount) {
            $res['ServiceCount'] = $this->serviceCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEngineNamespaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ServiceCount'])) {
            $model->serviceCount = $map['ServiceCount'];
        }

        return $model;
    }
}
