<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetSourceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetSourceResponseBody\data\k8SSourceInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetSourceResponseBody\data\nacosSourceInfo;

class data extends Model
{
    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var k8SSourceInfo
     */
    public $k8SSourceInfo;

    /**
     * @var nacosSourceInfo
     */
    public $nacosSourceInfo;

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
    public $sourceId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'createTimestamp' => 'createTimestamp',
        'gatewayId' => 'gatewayId',
        'k8SSourceInfo' => 'k8SSourceInfo',
        'nacosSourceInfo' => 'nacosSourceInfo',
        'name' => 'name',
        'resourceGroupId' => 'resourceGroupId',
        'sourceId' => 'sourceId',
        'type' => 'type',
        'updateTimestamp' => 'updateTimestamp',
    ];

    public function validate()
    {
        if (null !== $this->k8SSourceInfo) {
            $this->k8SSourceInfo->validate();
        }
        if (null !== $this->nacosSourceInfo) {
            $this->nacosSourceInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTimestamp) {
            $res['createTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->k8SSourceInfo) {
            $res['k8SSourceInfo'] = null !== $this->k8SSourceInfo ? $this->k8SSourceInfo->toArray($noStream) : $this->k8SSourceInfo;
        }

        if (null !== $this->nacosSourceInfo) {
            $res['nacosSourceInfo'] = null !== $this->nacosSourceInfo ? $this->nacosSourceInfo->toArray($noStream) : $this->nacosSourceInfo;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->updateTimestamp) {
            $res['updateTimestamp'] = $this->updateTimestamp;
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
        if (isset($map['createTimestamp'])) {
            $model->createTimestamp = $map['createTimestamp'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['k8SSourceInfo'])) {
            $model->k8SSourceInfo = k8SSourceInfo::fromMap($map['k8SSourceInfo']);
        }

        if (isset($map['nacosSourceInfo'])) {
            $model->nacosSourceInfo = nacosSourceInfo::fromMap($map['nacosSourceInfo']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['updateTimestamp'])) {
            $model->updateTimestamp = $map['updateTimestamp'];
        }

        return $model;
    }
}
