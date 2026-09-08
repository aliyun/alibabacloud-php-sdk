<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\UpdateLoginPreferenceRequest\loginPreference;

class UpdateLoginPreferenceRequest extends Model
{
    /**
     * @var string[]
     */
    public $allowedPostLogoutRedirectUris;

    /**
     * @var loginPreference
     */
    public $loginPreference;

    /**
     * @var string
     */
    public $userPoolName;
    protected $_name = [
        'allowedPostLogoutRedirectUris' => 'AllowedPostLogoutRedirectUris',
        'loginPreference' => 'LoginPreference',
        'userPoolName' => 'UserPoolName',
    ];

    public function validate()
    {
        if (\is_array($this->allowedPostLogoutRedirectUris)) {
            Model::validateArray($this->allowedPostLogoutRedirectUris);
        }
        if (null !== $this->loginPreference) {
            $this->loginPreference->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedPostLogoutRedirectUris) {
            if (\is_array($this->allowedPostLogoutRedirectUris)) {
                $res['AllowedPostLogoutRedirectUris'] = [];
                $n1 = 0;
                foreach ($this->allowedPostLogoutRedirectUris as $item1) {
                    $res['AllowedPostLogoutRedirectUris'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

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
        if (isset($map['AllowedPostLogoutRedirectUris'])) {
            if (!empty($map['AllowedPostLogoutRedirectUris'])) {
                $model->allowedPostLogoutRedirectUris = [];
                $n1 = 0;
                foreach ($map['AllowedPostLogoutRedirectUris'] as $item1) {
                    $model->allowedPostLogoutRedirectUris[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LoginPreference'])) {
            $model->loginPreference = loginPreference::fromMap($map['LoginPreference']);
        }

        if (isset($map['UserPoolName'])) {
            $model->userPoolName = $map['UserPoolName'];
        }

        return $model;
    }
}
