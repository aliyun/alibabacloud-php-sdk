<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class GetSupplementDagrunInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $dagrunId;

    /**
     * @var string
     */
    public $env;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'dagrunId' => 'DagrunId',
        'env' => 'Env',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
