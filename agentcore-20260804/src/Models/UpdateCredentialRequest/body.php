<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateCredentialRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateCredentialRequest\body\resourceRefs;

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

    /**
     * @var resourceRefs[]
     */
    public $resourceRefs;

    /**
     * @var string
     */
    public $resourceScope;
    protected $_name = [
        'credentialMetadata' => 'credentialMetadata',
        'description' => 'description',
        'resourceRefs' => 'resourceRefs',
        'resourceScope' => 'resourceScope',
    ];

    public function validate()
    {
        if (\is_array($this->resourceRefs)) {
            Model::validateArray($this->resourceRefs);
        }
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

        if (null !== $this->resourceRefs) {
            if (\is_array($this->resourceRefs)) {
                $res['resourceRefs'] = [];
                $n1 = 0;
                foreach ($this->resourceRefs as $item1) {
                    $res['resourceRefs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceScope) {
            $res['resourceScope'] = $this->resourceScope;
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

        if (isset($map['resourceRefs'])) {
            if (!empty($map['resourceRefs'])) {
                $model->resourceRefs = [];
                $n1 = 0;
                foreach ($map['resourceRefs'] as $item1) {
                    $model->resourceRefs[$n1] = resourceRefs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['resourceScope'])) {
            $model->resourceScope = $map['resourceScope'];
        }

        return $model;
    }
}
