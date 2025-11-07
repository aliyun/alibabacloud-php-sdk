<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\GetApplicationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetApplicationResponseBody\application\alarmConfig;

class application extends Model
{
    /**
     * @var alarmConfig
     */
    public $alarmConfig;

    /**
     * @var string
     */
    public $applicationSource;

    /**
     * @var string
     */
    public $applicationType;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var mixed[]
     */
    public $tags;

    /**
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

    public function validate()
    {
        if (null !== $this->alarmConfig) {
            $this->alarmConfig->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmConfig) {
            $res['AlarmConfig'] = null !== $this->alarmConfig ? $this->alarmConfig->toArray($noStream) : $this->alarmConfig;
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['Tags'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
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
            if (!empty($map['Tags'])) {
                $model->tags = [];
                foreach ($map['Tags'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
                }
            }
        }

        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }

        return $model;
    }
}
