<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class UpdatePipelineManagementConfigRequest extends Model
{
    /**
     * @var string[]
     */
    public $endpoints;

    /**
     * @example ******
     *
     * @var string
     */
    public $password;

    /**
     * @var string[]
     */
    public $pipelineIds;

    /**
     * @example ES
     *
     * @var string
     */
    public $pipelineManagementType;

    /**
     * @example elastic
     *
     * @var string
     */
    public $userName;

    /**
     * @example 5A2CFF0E-5718-45B5-9D4D-70B3FF****
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'endpoints'              => 'endpoints',
        'password'               => 'password',
        'pipelineIds'            => 'pipelineIds',
        'pipelineManagementType' => 'pipelineManagementType',
        'userName'               => 'userName',
        'clientToken'            => 'clientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpoints) {
            $res['endpoints'] = $this->endpoints;
        }
        if (null !== $this->password) {
            $res['password'] = $this->password;
        }
        if (null !== $this->pipelineIds) {
            $res['pipelineIds'] = $this->pipelineIds;
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

    /**
     * @param array $map
     *
     * @return UpdatePipelineManagementConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endpoints'])) {
            if (!empty($map['endpoints'])) {
                $model->endpoints = $map['endpoints'];
            }
        }
        if (isset($map['password'])) {
            $model->password = $map['password'];
        }
        if (isset($map['pipelineIds'])) {
            if (!empty($map['pipelineIds'])) {
                $model->pipelineIds = $map['pipelineIds'];
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
