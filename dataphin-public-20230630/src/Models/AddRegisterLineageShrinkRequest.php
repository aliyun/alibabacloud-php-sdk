<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class AddRegisterLineageShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $addRegisterLineageCommandShrink;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'addRegisterLineageCommandShrink' => 'AddRegisterLineageCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addRegisterLineageCommandShrink) {
            $res['AddRegisterLineageCommand'] = $this->addRegisterLineageCommandShrink;
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
        if (isset($map['AddRegisterLineageCommand'])) {
            $model->addRegisterLineageCommandShrink = $map['AddRegisterLineageCommand'];
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
