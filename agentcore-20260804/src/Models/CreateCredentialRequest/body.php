<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateCredentialRequest;

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
    public $credentialType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'credentialMetadata' => 'credentialMetadata',
        'credentialType' => 'credentialType',
        'description' => 'description',
        'name' => 'name',
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

        if (null !== $this->credentialType) {
            $res['credentialType'] = $this->credentialType;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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

        if (isset($map['credentialType'])) {
            $model->credentialType = $map['credentialType'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
