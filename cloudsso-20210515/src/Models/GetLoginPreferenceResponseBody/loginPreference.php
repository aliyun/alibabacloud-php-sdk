<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetLoginPreferenceResponseBody;

use AlibabaCloud\Dara\Model;

class loginPreference extends Model
{
    /**
     * @var bool
     */
    public $allowUserToGetCredentials;

    /**
     * @var string
     */
    public $loginNetworkMasks;
    protected $_name = [
        'allowUserToGetCredentials' => 'AllowUserToGetCredentials',
        'loginNetworkMasks' => 'LoginNetworkMasks',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowUserToGetCredentials) {
            $res['AllowUserToGetCredentials'] = $this->allowUserToGetCredentials;
        }

        if (null !== $this->loginNetworkMasks) {
            $res['LoginNetworkMasks'] = $this->loginNetworkMasks;
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
        if (isset($map['AllowUserToGetCredentials'])) {
            $model->allowUserToGetCredentials = $map['AllowUserToGetCredentials'];
        }

        if (isset($map['LoginNetworkMasks'])) {
            $model->loginNetworkMasks = $map['LoginNetworkMasks'];
        }

        return $model;
    }
}
