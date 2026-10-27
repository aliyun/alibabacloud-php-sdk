<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateIdentityProviderSCIMRequest;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var bool
     */
    public $syncEnabled;
    protected $_name = [
        'syncEnabled' => 'syncEnabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->syncEnabled) {
            $res['syncEnabled'] = $this->syncEnabled;
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
        if (isset($map['syncEnabled'])) {
            $model->syncEnabled = $map['syncEnabled'];
        }

        return $model;
    }
}
