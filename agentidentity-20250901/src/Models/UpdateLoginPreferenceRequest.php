<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateLoginPreferenceRequest\loginPreference;

class UpdateLoginPreferenceRequest extends Model
{
    /**
     * @var loginPreference
     */
    public $loginPreference;

    /**
     * @var string
     */
    public $userPoolName;
    protected $_name = [
        'loginPreference' => 'LoginPreference',
        'userPoolName' => 'UserPoolName',
    ];

    public function validate()
    {
        if (null !== $this->loginPreference) {
            $this->loginPreference->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->loginPreference) {
            $res['LoginPreference'] = null !== $this->loginPreference ? $this->loginPreference->toArray($noStream) : $this->loginPreference;
        }

        if (null !== $this->userPoolName) {
            $res['UserPoolName'] = $this->userPoolName;
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
        if (isset($map['LoginPreference'])) {
            $model->loginPreference = loginPreference::fromMap($map['LoginPreference']);
        }

        if (isset($map['UserPoolName'])) {
            $model->userPoolName = $map['UserPoolName'];
        }

        return $model;
    }
}
