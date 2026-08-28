<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateManagedAgentResponseBody\data\environment;

use AlibabaCloud\Dara\Model;

class credentialReferences extends Model
{
    /**
     * @var string
     */
    public $credentialId;
    protected $_name = [
        'credentialId' => 'credentialId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credentialId) {
            $res['credentialId'] = $this->credentialId;
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
        if (isset($map['credentialId'])) {
            $model->credentialId = $map['credentialId'];
        }

        return $model;
    }
}
