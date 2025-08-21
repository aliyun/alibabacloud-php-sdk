<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;

class UpdatePipelineManagementConfigRequest extends Model
{
    /**
     * @var string[]
     */
    public $endpoints;

    /**
     * @var string
     */
    public $esInstanceId;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string[]
     */
    public $pipelineIds;

    /**
     * @var string
     */
    public $pipelineManagementType;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'endpoints' => 'endpoints',
        'esInstanceId' => 'esInstanceId',
        'password' => 'password',
        'pipelineIds' => 'pipelineIds',
        'pipelineManagementType' => 'pipelineManagementType',
        'userName' => 'userName',
        'clientToken' => 'clientToken',
    ];

    public function validate()
    {
        if (\is_array($this->endpoints)) {
            Model::validateArray($this->endpoints);
        }
        if (\is_array($this->pipelineIds)) {
            Model::validateArray($this->pipelineIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpoints) {
            if (\is_array($this->endpoints)) {
                $res['endpoints'] = [];
                $n1 = 0;
                foreach ($this->endpoints as $item1) {
                    $res['endpoints'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->esInstanceId) {
            $res['esInstanceId'] = $this->esInstanceId;
        }

        if (null !== $this->password) {
            $res['password'] = $this->password;
        }

        if (null !== $this->pipelineIds) {
            if (\is_array($this->pipelineIds)) {
                $res['pipelineIds'] = [];
                $n1 = 0;
                foreach ($this->pipelineIds as $item1) {
                    $res['pipelineIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pipelineManagementType) {
            $res['pipelineManagementType'] = $this->pipelineManagementType;
        }

        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
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
        if (isset($map['endpoints'])) {
            if (!empty($map['endpoints'])) {
                $model->endpoints = [];
                $n1 = 0;
                foreach ($map['endpoints'] as $item1) {
                    $model->endpoints[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['esInstanceId'])) {
            $model->esInstanceId = $map['esInstanceId'];
        }

        if (isset($map['password'])) {
            $model->password = $map['password'];
        }

        if (isset($map['pipelineIds'])) {
            if (!empty($map['pipelineIds'])) {
                $model->pipelineIds = [];
                $n1 = 0;
                foreach ($map['pipelineIds'] as $item1) {
                    $model->pipelineIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['pipelineManagementType'])) {
            $model->pipelineManagementType = $map['pipelineManagementType'];
        }

        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
