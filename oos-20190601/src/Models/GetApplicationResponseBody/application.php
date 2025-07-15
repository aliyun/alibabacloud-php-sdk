<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\GetApplicationResponseBody;

use AlibabaCloud\SDK\Oos\V20190601\Models\GetApplicationResponseBody\application\alarmConfig;
use AlibabaCloud\Tea\Model;

class application extends Model
{
    /**
     * @description The configurations of application alerts.
     *
     * @var alarmConfig
     */
    public $alarmConfig;

    /**
     * @description The source of application.
     *
     * @example {"Platform":"gitee","Owner":"aliyun-computenest","RepoName":"aliyun-computenest/java-springboot-demo","Name":"java-springboot-demo"}
     *
     * @var string
     */
    public $applicationSource;

    /**
     * @description The type of the application.
     *
     * Valid values:
     *
     *   ComputeNest
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   Custom
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   DingTalk
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * @example DingTalk
     *
     * @var string
     */
    public $applicationType;

    /**
     * @description The time when the application was created.
     *
     * @example 2021-09-07T09:17:46Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The description of the application.
     *
     * @example Application
     *
     * @var string
     */
    public $description;

    /**
     * @description The application name.
     *
     * @example MyApplication
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxsn4m******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the Compute Nest service that corresponds to the application template.
     *
     * @example service-79538e30e44541b699d8
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The tags.
     *
     * @example {"k1": "v1", "k2": "v2"}
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @description The time when the application was updated.
     *
     * @example 2021-09-07T09:17:46Z
     *
     * @var string
     */
    public $updateDate;
    protected $_name = [
        'alarmConfig' => 'AlarmConfig',
        'applicationSource' => 'ApplicationSource',
        'applicationType' => 'ApplicationType',
        'createDate' => 'CreateDate',
        'description' => 'Description',
        'name' => 'Name',
        'resourceGroupId' => 'ResourceGroupId',
        'serviceId' => 'ServiceId',
        'tags' => 'Tags',
        'updateDate' => 'UpdateDate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmConfig) {
            $res['AlarmConfig'] = null !== $this->alarmConfig ? $this->alarmConfig->toMap() : null;
        }
        if (null !== $this->applicationSource) {
            $res['ApplicationSource'] = $this->applicationSource;
        }
        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return application
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmConfig'])) {
            $model->alarmConfig = alarmConfig::fromMap($map['AlarmConfig']);
        }
        if (isset($map['ApplicationSource'])) {
            $model->applicationSource = $map['ApplicationSource'];
        }
        if (isset($map['ApplicationType'])) {
            $model->applicationType = $map['ApplicationType'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }

        return $model;
    }
}
