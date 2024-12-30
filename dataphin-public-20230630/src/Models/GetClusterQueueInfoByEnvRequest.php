<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class GetClusterQueueInfoByEnvRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example DEV
     *
     * @var string
     */
    public $env;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;

    /**
     * @description This parameter is required.
     *
     * @example 7081229106458752
     *
     * @var int
     */
    public $projectId;

    /**
     * @description This parameter is required.
     *
     * @example BOTH
     *
     * @var string
     */
    public $streamBatchMode;
    protected $_name = [
        'env'             => 'Env',
        'opTenantId'      => 'OpTenantId',
        'projectId'       => 'ProjectId',
        'streamBatchMode' => 'StreamBatchMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->streamBatchMode) {
            $res['StreamBatchMode'] = $this->streamBatchMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetClusterQueueInfoByEnvRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['StreamBatchMode'])) {
            $model->streamBatchMode = $map['StreamBatchMode'];
        }

        return $model;
    }
}
