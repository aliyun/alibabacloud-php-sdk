<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class GetSupplementDagrunRequest extends Model
{
    /**
     * @var string
     */
    public $env;

    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var string
     */
    public $supplementId;
    protected $_name = [
        'env' => 'Env',
        'opTenantId' => 'OpTenantId',
        'supplementId' => 'SupplementId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->supplementId) {
            $res['SupplementId'] = $this->supplementId;
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
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        if (isset($map['SupplementId'])) {
            $model->supplementId = $map['SupplementId'];
        }

        return $model;
    }
}
