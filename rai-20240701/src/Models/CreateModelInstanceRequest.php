<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models;

use AlibabaCloud\Dara\Model;

class CreateModelInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $easServiceId;

    /**
     * @var string
     */
    public $easServiceName;

    /**
     * @var string
     */
    public $modelCallName;

    /**
     * @var int
     */
    public $modelCategoryId;

    /**
     * @var string
     */
    public $modelToken;

    /**
     * @var string
     */
    public $modelUrl;

    /**
     * @var string
     */
    public $modelVpcUrl;

    /**
     * @var int
     */
    public $workspaceId;
    protected $_name = [
        'easServiceId' => 'EasServiceId',
        'easServiceName' => 'EasServiceName',
        'modelCallName' => 'ModelCallName',
        'modelCategoryId' => 'ModelCategoryId',
        'modelToken' => 'ModelToken',
        'modelUrl' => 'ModelUrl',
        'modelVpcUrl' => 'ModelVpcUrl',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->easServiceId) {
            $res['EasServiceId'] = $this->easServiceId;
        }

        if (null !== $this->easServiceName) {
            $res['EasServiceName'] = $this->easServiceName;
        }

        if (null !== $this->modelCallName) {
            $res['ModelCallName'] = $this->modelCallName;
        }

        if (null !== $this->modelCategoryId) {
            $res['ModelCategoryId'] = $this->modelCategoryId;
        }

        if (null !== $this->modelToken) {
            $res['ModelToken'] = $this->modelToken;
        }

        if (null !== $this->modelUrl) {
            $res['ModelUrl'] = $this->modelUrl;
        }

        if (null !== $this->modelVpcUrl) {
            $res['ModelVpcUrl'] = $this->modelVpcUrl;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['EasServiceId'])) {
            $model->easServiceId = $map['EasServiceId'];
        }

        if (isset($map['EasServiceName'])) {
            $model->easServiceName = $map['EasServiceName'];
        }

        if (isset($map['ModelCallName'])) {
            $model->modelCallName = $map['ModelCallName'];
        }

        if (isset($map['ModelCategoryId'])) {
            $model->modelCategoryId = $map['ModelCategoryId'];
        }

        if (isset($map['ModelToken'])) {
            $model->modelToken = $map['ModelToken'];
        }

        if (isset($map['ModelUrl'])) {
            $model->modelUrl = $map['ModelUrl'];
        }

        if (isset($map['ModelVpcUrl'])) {
            $model->modelVpcUrl = $map['ModelVpcUrl'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
