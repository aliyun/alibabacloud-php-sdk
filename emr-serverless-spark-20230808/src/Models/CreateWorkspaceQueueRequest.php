<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateWorkspaceQueueRequest\resourceSpec;

class CreateWorkspaceQueueRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $gpuSpec;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var bool
     */
    public $preheat;

    /**
     * @var string
     */
    public $queueCategory;

    /**
     * @var resourceSpec
     */
    public $resourceSpec;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $workspaceQueueName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'description' => 'description',
        'gpuSpec' => 'gpuSpec',
        'instanceId' => 'instanceId',
        'paymentType' => 'paymentType',
        'preheat' => 'preheat',
        'queueCategory' => 'queueCategory',
        'resourceSpec' => 'resourceSpec',
        'workspaceId' => 'workspaceId',
        'workspaceQueueName' => 'workspaceQueueName',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
        if (\is_array($this->gpuSpec)) {
            Model::validateArray($this->gpuSpec);
        }
        if (null !== $this->resourceSpec) {
            $this->resourceSpec->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->gpuSpec) {
            if (\is_array($this->gpuSpec)) {
                $res['gpuSpec'] = [];
                $n1 = 0;
                foreach ($this->gpuSpec as $item1) {
                    $res['gpuSpec'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->paymentType) {
            $res['paymentType'] = $this->paymentType;
        }

        if (null !== $this->preheat) {
            $res['preheat'] = $this->preheat;
        }

        if (null !== $this->queueCategory) {
            $res['queueCategory'] = $this->queueCategory;
        }

        if (null !== $this->resourceSpec) {
            $res['resourceSpec'] = null !== $this->resourceSpec ? $this->resourceSpec->toArray($noStream) : $this->resourceSpec;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        if (null !== $this->workspaceQueueName) {
            $res['workspaceQueueName'] = $this->workspaceQueueName;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['gpuSpec'])) {
            if (!empty($map['gpuSpec'])) {
                $model->gpuSpec = [];
                $n1 = 0;
                foreach ($map['gpuSpec'] as $item1) {
                    $model->gpuSpec[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['paymentType'])) {
            $model->paymentType = $map['paymentType'];
        }

        if (isset($map['preheat'])) {
            $model->preheat = $map['preheat'];
        }

        if (isset($map['queueCategory'])) {
            $model->queueCategory = $map['queueCategory'];
        }

        if (isset($map['resourceSpec'])) {
            $model->resourceSpec = resourceSpec::fromMap($map['resourceSpec']);
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        if (isset($map['workspaceQueueName'])) {
            $model->workspaceQueueName = $map['workspaceQueueName'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
