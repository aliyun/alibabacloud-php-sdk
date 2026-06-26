<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetLoginPreferenceResponseBody;

use AlibabaCloud\Dara\Model;

class loginPreference extends Model
{
    /**
     * @var bool
     */
    public $enablePasswordLogin;
    protected $_name = [
        'enablePasswordLogin' => 'EnablePasswordLogin',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enablePasswordLogin) {
            $res['EnablePasswordLogin'] = $this->enablePasswordLogin;
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
        if (isset($map['EnablePasswordLogin'])) {
            $model->enablePasswordLogin = $map['EnablePasswordLogin'];
        }

        return $model;
    }
}
