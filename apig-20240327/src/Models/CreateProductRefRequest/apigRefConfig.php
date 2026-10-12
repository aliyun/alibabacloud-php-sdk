<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateProductRefRequest;

use AlibabaCloud\Dara\Model;

class apigRefConfig extends Model
{
    /**
     * @var string
     */
    public $agentApiId;

    /**
     * @var string
     */
    public $agentApiName;

    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $mcpRouteId;

    /**
     * @var string
     */
    public $mcpServerId;

    /**
     * @var string
     */
    public $mcpServerName;

    /**
     * @var string
     */
    public $modelApiId;

    /**
     * @var string
     */
    public $modelApiName;
    protected $_name = [
        'agentApiId' => 'agentApiId',
        'agentApiName' => 'agentApiName',
        'apiId' => 'apiId',
        'apiName' => 'apiName',
        'mcpRouteId' => 'mcpRouteId',
        'mcpServerId' => 'mcpServerId',
        'mcpServerName' => 'mcpServerName',
        'modelApiId' => 'modelApiId',
        'modelApiName' => 'modelApiName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentApiId) {
            $res['agentApiId'] = $this->agentApiId;
        }

        if (null !== $this->agentApiName) {
            $res['agentApiName'] = $this->agentApiName;
        }

        if (null !== $this->apiId) {
            $res['apiId'] = $this->apiId;
        }

        if (null !== $this->apiName) {
            $res['apiName'] = $this->apiName;
        }

        if (null !== $this->mcpRouteId) {
            $res['mcpRouteId'] = $this->mcpRouteId;
        }

        if (null !== $this->mcpServerId) {
            $res['mcpServerId'] = $this->mcpServerId;
        }

        if (null !== $this->mcpServerName) {
            $res['mcpServerName'] = $this->mcpServerName;
        }

        if (null !== $this->modelApiId) {
            $res['modelApiId'] = $this->modelApiId;
        }

        if (null !== $this->modelApiName) {
            $res['modelApiName'] = $this->modelApiName;
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
        if (isset($map['agentApiId'])) {
            $model->agentApiId = $map['agentApiId'];
        }

        if (isset($map['agentApiName'])) {
            $model->agentApiName = $map['agentApiName'];
        }

        if (isset($map['apiId'])) {
            $model->apiId = $map['apiId'];
        }

        if (isset($map['apiName'])) {
            $model->apiName = $map['apiName'];
        }

        if (isset($map['mcpRouteId'])) {
            $model->mcpRouteId = $map['mcpRouteId'];
        }

        if (isset($map['mcpServerId'])) {
            $model->mcpServerId = $map['mcpServerId'];
        }

        if (isset($map['mcpServerName'])) {
            $model->mcpServerName = $map['mcpServerName'];
        }

        if (isset($map['modelApiId'])) {
            $model->modelApiId = $map['modelApiId'];
        }

        if (isset($map['modelApiName'])) {
            $model->modelApiName = $map['modelApiName'];
        }

        return $model;
    }
}
