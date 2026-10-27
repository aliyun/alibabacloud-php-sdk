<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateIdentityProviderSCIMResponseBody\data;

use AlibabaCloud\Dara\Model;

class metadata extends Model
{
    /**
     * @var string
     */
    public $binding;

    /**
     * @var string
     */
    public $certificates;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $loginUrl;
    protected $_name = [
        'binding' => 'binding',
        'certificates' => 'certificates',
        'entityId' => 'entityId',
        'loginUrl' => 'loginUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->binding) {
            $res['binding'] = $this->binding;
        }

        if (null !== $this->certificates) {
            $res['certificates'] = $this->certificates;
        }

        if (null !== $this->entityId) {
            $res['entityId'] = $this->entityId;
        }

        if (null !== $this->loginUrl) {
            $res['loginUrl'] = $this->loginUrl;
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
        if (isset($map['binding'])) {
            $model->binding = $map['binding'];
        }

        if (isset($map['certificates'])) {
            $model->certificates = $map['certificates'];
        }

        if (isset($map['entityId'])) {
            $model->entityId = $map['entityId'];
        }

        if (isset($map['loginUrl'])) {
            $model->loginUrl = $map['loginUrl'];
        }

        return $model;
    }
}
