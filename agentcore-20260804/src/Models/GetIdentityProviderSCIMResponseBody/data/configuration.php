<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetIdentityProviderSCIMResponseBody\data;

use AlibabaCloud\Dara\Model;

class configuration extends Model
{
    /**
     * @var string
     */
    public $baseUrl;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'baseUrl' => 'baseUrl',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseUrl) {
            $res['baseUrl'] = $this->baseUrl;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['baseUrl'])) {
            $model->baseUrl = $map['baseUrl'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
