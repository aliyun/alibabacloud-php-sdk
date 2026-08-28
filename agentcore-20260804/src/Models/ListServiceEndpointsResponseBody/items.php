<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ListServiceEndpointsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListServiceEndpointsResponseBody\items\accessUrls;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListServiceEndpointsResponseBody\items\authentication;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListServiceEndpointsResponseBody\items\target;

class items extends Model
{
    /**
     * @var accessUrls[]
     */
    public $accessUrls;

    /**
     * @var authentication
     */
    public $authentication;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $endpointType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $serviceEndpointId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusReason;

    /**
     * @var target
     */
    public $target;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessUrls' => 'accessUrls',
        'authentication' => 'authentication',
        'createdAt' => 'createdAt',
        'endpointType' => 'endpointType',
        'name' => 'name',
        'regionId' => 'regionId',
        'serviceEndpointId' => 'serviceEndpointId',
        'status' => 'status',
        'statusReason' => 'statusReason',
        'target' => 'target',
        'updatedAt' => 'updatedAt',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->accessUrls)) {
            Model::validateArray($this->accessUrls);
        }
        if (null !== $this->authentication) {
            $this->authentication->validate();
        }
        if (null !== $this->target) {
            $this->target->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessUrls) {
            if (\is_array($this->accessUrls)) {
                $res['accessUrls'] = [];
                $n1 = 0;
                foreach ($this->accessUrls as $item1) {
                    $res['accessUrls'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->authentication) {
            $res['authentication'] = null !== $this->authentication ? $this->authentication->toArray($noStream) : $this->authentication;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->endpointType) {
            $res['endpointType'] = $this->endpointType;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->serviceEndpointId) {
            $res['serviceEndpointId'] = $this->serviceEndpointId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->statusReason) {
            $res['statusReason'] = $this->statusReason;
        }

        if (null !== $this->target) {
            $res['target'] = null !== $this->target ? $this->target->toArray($noStream) : $this->target;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
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
        if (isset($map['accessUrls'])) {
            if (!empty($map['accessUrls'])) {
                $model->accessUrls = [];
                $n1 = 0;
                foreach ($map['accessUrls'] as $item1) {
                    $model->accessUrls[$n1] = accessUrls::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['authentication'])) {
            $model->authentication = authentication::fromMap($map['authentication']);
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['endpointType'])) {
            $model->endpointType = $map['endpointType'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['serviceEndpointId'])) {
            $model->serviceEndpointId = $map['serviceEndpointId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['statusReason'])) {
            $model->statusReason = $map['statusReason'];
        }

        if (isset($map['target'])) {
            $model->target = target::fromMap($map['target']);
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
