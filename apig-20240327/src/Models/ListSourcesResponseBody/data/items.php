<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListSourcesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListSourcesResponseBody\data\items\k8sSourceInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListSourcesResponseBody\data\items\nacosSourceInfo;

class items extends Model
{
    /**
     * @var string
     */
    public $associationReason;

    /**
     * @var string
     */
    public $associationStatus;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var k8sSourceInfo
     */
    public $k8sSourceInfo;

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
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'associationReason' => 'associationReason',
        'associationStatus' => 'associationStatus',
        'createTimestamp' => 'createTimestamp',
        'k8sSourceInfo' => 'k8sSourceInfo',
        'nacosSourceInfo' => 'nacosSourceInfo',
        'name' => 'name',
        'resourceGroupId' => 'resourceGroupId',
        'sourceId' => 'sourceId',
        'updateTimestamp' => 'updateTimestamp',
    ];

    public function validate()
    {
        if (null !== $this->k8sSourceInfo) {
            $this->k8sSourceInfo->validate();
        }
        if (null !== $this->nacosSourceInfo) {
            $this->nacosSourceInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associationReason) {
            $res['associationReason'] = $this->associationReason;
        }

        if (null !== $this->associationStatus) {
            $res['associationStatus'] = $this->associationStatus;
        }

        if (null !== $this->createTimestamp) {
            $res['createTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->k8sSourceInfo) {
            $res['k8sSourceInfo'] = null !== $this->k8sSourceInfo ? $this->k8sSourceInfo->toArray($noStream) : $this->k8sSourceInfo;
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
        if (isset($map['associationReason'])) {
            $model->associationReason = $map['associationReason'];
        }

        if (isset($map['associationStatus'])) {
            $model->associationStatus = $map['associationStatus'];
        }

        if (isset($map['createTimestamp'])) {
            $model->createTimestamp = $map['createTimestamp'];
        }

        if (isset($map['k8sSourceInfo'])) {
            $model->k8sSourceInfo = k8sSourceInfo::fromMap($map['k8sSourceInfo']);
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

        if (isset($map['updateTimestamp'])) {
            $model->updateTimestamp = $map['updateTimestamp'];
        }

        return $model;
    }
}
