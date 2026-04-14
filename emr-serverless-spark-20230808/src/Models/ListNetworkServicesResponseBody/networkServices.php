<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListNetworkServicesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListNetworkServicesResponseBody\networkServices\stateChangeReason;

class networkServices extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $networkServiceId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var stateChangeReason
     */
    public $stateChangeReason;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string[]
     */
    public $vswitchIds;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'name' => 'name',
        'networkServiceId' => 'networkServiceId',
        'state' => 'state',
        'stateChangeReason' => 'stateChangeReason',
        'type' => 'type',
        'vpcId' => 'vpcId',
        'vswitchIds' => 'vswitchIds',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (null !== $this->stateChangeReason) {
            $this->stateChangeReason->validate();
        }
        if (\is_array($this->vswitchIds)) {
            Model::validateArray($this->vswitchIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->networkServiceId) {
            $res['networkServiceId'] = $this->networkServiceId;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        if (null !== $this->stateChangeReason) {
            $res['stateChangeReason'] = null !== $this->stateChangeReason ? $this->stateChangeReason->toArray($noStream) : $this->stateChangeReason;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }

        if (null !== $this->vswitchIds) {
            if (\is_array($this->vswitchIds)) {
                $res['vswitchIds'] = [];
                $n1 = 0;
                foreach ($this->vswitchIds as $item1) {
                    $res['vswitchIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['networkServiceId'])) {
            $model->networkServiceId = $map['networkServiceId'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        if (isset($map['stateChangeReason'])) {
            $model->stateChangeReason = stateChangeReason::fromMap($map['stateChangeReason']);
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        if (isset($map['vswitchIds'])) {
            if (!empty($map['vswitchIds'])) {
                $model->vswitchIds = [];
                $n1 = 0;
                foreach ($map['vswitchIds'] as $item1) {
                    $model->vswitchIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
