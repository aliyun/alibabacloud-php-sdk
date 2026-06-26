<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;

class UpdateLoginPreferenceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $loginPreferenceShrink;

    /**
     * @var string
     */
    public $userPoolName;
    protected $_name = [
        'loginPreferenceShrink' => 'LoginPreference',
        'userPoolName' => 'UserPoolName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->loginPreferenceShrink) {
            $res['LoginPreference'] = $this->loginPreferenceShrink;
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
            $model->loginPreferenceShrink = $map['LoginPreference'];
        }

        if (isset($map['UserPoolName'])) {
            $model->userPoolName = $map['UserPoolName'];
        }

        return $model;
    }
}
