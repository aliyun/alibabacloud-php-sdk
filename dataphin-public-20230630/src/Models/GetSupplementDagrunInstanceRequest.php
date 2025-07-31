<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class GetSupplementDagrunInstanceRequest extends Model
{
    /**
     * @description Dagrun ID
     *
     * This parameter is required.
     *
     * @example dr_2242792_14542
     *
     * @var string
     */
    public $dagrunId;

    /**
     * @example PROD
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
    protected $_name = [
        'dagrunId' => 'DagrunId',
        'env' => 'Env',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dagrunId) {
            $res['DagrunId'] = $this->dagrunId;
        }
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSupplementDagrunInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DagrunId'])) {
            $model->dagrunId = $map['DagrunId'];
        }
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
