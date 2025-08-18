<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class FixDataShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $env;

    /**
     * @var string
     */
    public $fixDataCommandShrink;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'env' => 'Env',
        'fixDataCommandShrink' => 'FixDataCommand',
        'opTenantId' => 'OpTenantId',
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

        if (null !== $this->fixDataCommandShrink) {
            $res['FixDataCommand'] = $this->fixDataCommandShrink;
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
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        if (isset($map['FixDataCommand'])) {
            $model->fixDataCommandShrink = $map['FixDataCommand'];
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
