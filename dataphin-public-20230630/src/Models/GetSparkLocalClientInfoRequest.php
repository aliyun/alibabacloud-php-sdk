<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class GetSparkLocalClientInfoRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $envEnum;

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
     * @var string
     */
    public $projectId;
    protected $_name = [
        'envEnum' => 'EnvEnum',
        'opTenantId' => 'OpTenantId',
        'projectId' => 'ProjectId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->envEnum) {
            $res['EnvEnum'] = $this->envEnum;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSparkLocalClientInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnvEnum'])) {
            $model->envEnum = $map['EnvEnum'];
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
