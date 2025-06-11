<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetLoginPreferenceResponseBody\loginPreference;

class GetLoginPreferenceResponseBody extends Model
{
    /**
     * @var loginPreference
     */
    public $loginPreference;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'loginPreference' => 'LoginPreference',
        'requestId' => 'RequestId',
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
