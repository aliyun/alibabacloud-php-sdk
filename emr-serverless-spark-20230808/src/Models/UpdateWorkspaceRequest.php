<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateWorkspaceRequest\subscription;

class UpdateWorkspaceRequest extends Model
{
    /**
     * @var int
     */
    public $cu;

    /**
     * @var int
     */
    public $gpu;

    /**
     * @var string[]
     */
    public $gpuSpec;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var subscription
     */
    public $subscription;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $workspaceName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'cu' => 'cu',
        'gpu' => 'gpu',
        'gpuSpec' => 'gpuSpec',
        'resourceGroupId' => 'resourceGroupId',
        'subscription' => 'subscription',
        'workspaceId' => 'workspaceId',
        'workspaceName' => 'workspaceName',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
        if (\is_array($this->gpuSpec)) {
            Model::validateArray($this->gpuSpec);
        }
        if (null !== $this->subscription) {
            $this->subscription->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cu) {
            $res['cu'] = $this->cu;
        }

        if (null !== $this->gpu) {
            $res['gpu'] = $this->gpu;
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

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->subscription) {
            $res['subscription'] = null !== $this->subscription ? $this->subscription->toArray($noStream) : $this->subscription;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        if (null !== $this->workspaceName) {
            $res['workspaceName'] = $this->workspaceName;
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
        if (isset($map['cu'])) {
            $model->cu = $map['cu'];
        }

        if (isset($map['gpu'])) {
            $model->gpu = $map['gpu'];
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

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['subscription'])) {
            $model->subscription = subscription::fromMap($map['subscription']);
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        if (isset($map['workspaceName'])) {
            $model->workspaceName = $map['workspaceName'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
