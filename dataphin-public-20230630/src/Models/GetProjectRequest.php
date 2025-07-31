<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class GetProjectRequest extends Model
{
    /**
     * @example DEV
     *
     * @var string
     */
    public $env;

    /**
     * @description This parameter is required.
     *
     * @example 12356
     *
     * @var int
     */
    public $id;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'env' => 'Env',
        'id' => 'Id',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
