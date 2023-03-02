<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class ExportNacosConfigRequest extends Model
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
     * @description The tag of the application.
     *
     * @example qjl-gateway-openapi
     *
     * @var string
     */
    public $appName;

    /**
     * @description The ID of the data that you want to export.
     *
     * >
     *
     *   Multiple export methods are supported.
     *   If you want to export a single configuration, you must leave the Ids parameter empty and specify the DataID and Group parameters.
     *
     * @example sms-mes-develop.prop****
     *
     * @var string
     */
    public $dataId;

    /**
     * @description The name of the configuration group.
     *
     * @example TIMEDTASK_COMMON_GROUP
     *
     * @var string
     */
    public $group;

    /**
     * @description The ID of the primary key of a configuration item.
     *
     * >  - Multiple export methods are supported. You must specify this parameter if you want to export multiple configurations. - You can obtain the value of this parameter by calling the ListNacosConfigs operation. - If you specify this parameter, multiple configurations are exported. The DataId and Group parameters are invalid.
     * @example 1709,1710
     *
     * @var string
     */
    public $ids;

    /**
     * @description The ID of the instance.
     *
     * @example mse-cn-2r42ddc****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the namespace.
     *
     * @example ae77c258-4d4f-478f-baaa-084aee0****
     *
     * @var string
     */
    public $namespaceId;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'appName'        => 'AppName',
        'dataId'         => 'DataId',
        'group'          => 'Group',
        'ids'            => 'Ids',
        'instanceId'     => 'InstanceId',
        'namespaceId'    => 'NamespaceId',
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
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportNacosConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['Ids'])) {
            $model->ids = $map['Ids'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        return $model;
    }
}
