<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateWorkerRequest\channels;

use AlibabaCloud\Dara\Model;

class secrets extends Model
{
    /**
     * @var string
     */
    public $clientSecret;
    protected $_name = [
        'clientSecret' => 'ClientSecret',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientSecret) {
            $res['ClientSecret'] = $this->clientSecret;
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
        if (isset($map['ClientSecret'])) {
            $model->clientSecret = $map['ClientSecret'];
        }

        return $model;
    }
}
