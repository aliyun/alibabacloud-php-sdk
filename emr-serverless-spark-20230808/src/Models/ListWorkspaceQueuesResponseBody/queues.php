<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspaceQueuesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspaceQueuesResponseBody\queues\allowActions;

class queues extends Model
{
    /**
     * @var allowActions[]
     */
    public $allowActions;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string[]
     */
    public $environments;

    /**
     * @var string
     */
    public $maxResource;

    /**
     * @var string
     */
    public $minResource;

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
    public $properties;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var string
     */
    public $queueScope;

    /**
     * @var string
     */
    public $queueStatus;

    /**
     * @var string
     */
    public $queueType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $usedResource;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'allowActions' => 'allowActions',
        'createTime' => 'createTime',
        'creator' => 'creator',
        'environments' => 'environments',
        'maxResource' => 'maxResource',
        'minResource' => 'minResource',
        'paymentType' => 'paymentType',
        'preheat' => 'preheat',
        'properties' => 'properties',
        'queueName' => 'queueName',
        'queueScope' => 'queueScope',
        'queueStatus' => 'queueStatus',
        'queueType' => 'queueType',
        'regionId' => 'regionId',
        'usedResource' => 'usedResource',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->allowActions)) {
            Model::validateArray($this->allowActions);
        }
        if (\is_array($this->environments)) {
            Model::validateArray($this->environments);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowActions) {
            if (\is_array($this->allowActions)) {
                $res['allowActions'] = [];
                $n1 = 0;
                foreach ($this->allowActions as $item1) {
                    $res['allowActions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }

        if (null !== $this->environments) {
            if (\is_array($this->environments)) {
                $res['environments'] = [];
                $n1 = 0;
                foreach ($this->environments as $item1) {
                    $res['environments'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResource) {
            $res['maxResource'] = $this->maxResource;
        }

        if (null !== $this->minResource) {
            $res['minResource'] = $this->minResource;
        }

        if (null !== $this->paymentType) {
            $res['paymentType'] = $this->paymentType;
        }

        if (null !== $this->preheat) {
            $res['preheat'] = $this->preheat;
        }

        if (null !== $this->properties) {
            $res['properties'] = $this->properties;
        }

        if (null !== $this->queueName) {
            $res['queueName'] = $this->queueName;
        }

        if (null !== $this->queueScope) {
            $res['queueScope'] = $this->queueScope;
        }

        if (null !== $this->queueStatus) {
            $res['queueStatus'] = $this->queueStatus;
        }

        if (null !== $this->queueType) {
            $res['queueType'] = $this->queueType;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->usedResource) {
            $res['usedResource'] = $this->usedResource;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['allowActions'])) {
            if (!empty($map['allowActions'])) {
                $model->allowActions = [];
                $n1 = 0;
                foreach ($map['allowActions'] as $item1) {
                    $model->allowActions[$n1] = allowActions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }

        if (isset($map['environments'])) {
            if (!empty($map['environments'])) {
                $model->environments = [];
                $n1 = 0;
                foreach ($map['environments'] as $item1) {
                    $model->environments[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['maxResource'])) {
            $model->maxResource = $map['maxResource'];
        }

        if (isset($map['minResource'])) {
            $model->minResource = $map['minResource'];
        }

        if (isset($map['paymentType'])) {
            $model->paymentType = $map['paymentType'];
        }

        if (isset($map['preheat'])) {
            $model->preheat = $map['preheat'];
        }

        if (isset($map['properties'])) {
            $model->properties = $map['properties'];
        }

        if (isset($map['queueName'])) {
            $model->queueName = $map['queueName'];
        }

        if (isset($map['queueScope'])) {
            $model->queueScope = $map['queueScope'];
        }

        if (isset($map['queueStatus'])) {
            $model->queueStatus = $map['queueStatus'];
        }

        if (isset($map['queueType'])) {
            $model->queueType = $map['queueType'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['usedResource'])) {
            $model->usedResource = $map['usedResource'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
