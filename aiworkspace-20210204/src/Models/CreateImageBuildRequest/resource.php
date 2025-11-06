<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateImageBuildRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateImageBuildRequest\resource\resourceConfig;

class resource extends Model
{
    /**
     * @var string
     */
    public $ecsSpec;

    /**
     * @var resourceConfig
     */
    public $resourceConfig;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'ecsSpec' => 'EcsSpec',
        'resourceConfig' => 'ResourceConfig',
        'resourceId' => 'ResourceId',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        if (null !== $this->resourceConfig) {
            $this->resourceConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ecsSpec) {
            $res['EcsSpec'] = $this->ecsSpec;
        }

        if (null !== $this->resourceConfig) {
            $res['ResourceConfig'] = null !== $this->resourceConfig ? $this->resourceConfig->toArray($noStream) : $this->resourceConfig;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (isset($map['EcsSpec'])) {
            $model->ecsSpec = $map['EcsSpec'];
        }

        if (isset($map['ResourceConfig'])) {
            $model->resourceConfig = resourceConfig::fromMap($map['ResourceConfig']);
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
