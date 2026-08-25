<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateCredentialRequest;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $credentialMetadata;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'credentialMetadata' => 'credentialMetadata',
        'description' => 'description',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credentialMetadata) {
            $res['credentialMetadata'] = $this->credentialMetadata;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
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
        if (isset($map['credentialMetadata'])) {
            $model->credentialMetadata = $map['credentialMetadata'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        return $model;
    }
}
