<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetStackDeploymentsResponseBody\deployments;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetStackDeploymentsResponseBody\deployments\planOutputs\moduleActionDetail;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetStackDeploymentsResponseBody\deployments\planOutputs\resourceChanges;

class planOutputs extends Model
{
    /**
     * @var string
     */
    public $moduleAction;

    /**
     * @var moduleActionDetail
     */
    public $moduleActionDetail;

    /**
     * @var resourceChanges[]
     */
    public $resourceChanges;

    /**
     * @var string
     */
    public $stackModuleName;
    protected $_name = [
        'moduleAction' => 'moduleAction',
        'moduleActionDetail' => 'moduleActionDetail',
        'resourceChanges' => 'resourceChanges',
        'stackModuleName' => 'stackModuleName',
    ];

    public function validate()
    {
        if (null !== $this->moduleActionDetail) {
            $this->moduleActionDetail->validate();
        }
        if (\is_array($this->resourceChanges)) {
            Model::validateArray($this->resourceChanges);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->moduleAction) {
            $res['moduleAction'] = $this->moduleAction;
        }

        if (null !== $this->moduleActionDetail) {
            $res['moduleActionDetail'] = null !== $this->moduleActionDetail ? $this->moduleActionDetail->toArray($noStream) : $this->moduleActionDetail;
        }

        if (null !== $this->resourceChanges) {
            if (\is_array($this->resourceChanges)) {
                $res['resourceChanges'] = [];
                $n1 = 0;
                foreach ($this->resourceChanges as $item1) {
                    $res['resourceChanges'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->stackModuleName) {
            $res['stackModuleName'] = $this->stackModuleName;
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
        if (isset($map['moduleAction'])) {
            $model->moduleAction = $map['moduleAction'];
        }

        if (isset($map['moduleActionDetail'])) {
            $model->moduleActionDetail = moduleActionDetail::fromMap($map['moduleActionDetail']);
        }

        if (isset($map['resourceChanges'])) {
            if (!empty($map['resourceChanges'])) {
                $model->resourceChanges = [];
                $n1 = 0;
                foreach ($map['resourceChanges'] as $item1) {
                    $model->resourceChanges[$n1] = resourceChanges::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['stackModuleName'])) {
            $model->stackModuleName = $map['stackModuleName'];
        }

        return $model;
    }
}
