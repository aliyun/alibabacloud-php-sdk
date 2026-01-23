<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class CreateStandardMappingShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $createCommandShrink;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'createCommandShrink' => 'CreateCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createCommandShrink) {
            $res['CreateCommand'] = $this->createCommandShrink;
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
        if (isset($map['CreateCommand'])) {
            $model->createCommandShrink = $map['CreateCommand'];
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
