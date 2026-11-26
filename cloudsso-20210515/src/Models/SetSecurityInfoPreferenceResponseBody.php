<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\SetSecurityInfoPreferenceResponseBody\securityInfoPreference;

class SetSecurityInfoPreferenceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var securityInfoPreference
     */
    public $securityInfoPreference;
    protected $_name = [
        'requestId' => 'RequestId',
        'securityInfoPreference' => 'SecurityInfoPreference',
    ];

    public function validate()
    {
        if (null !== $this->securityInfoPreference) {
            $this->securityInfoPreference->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityInfoPreference) {
            $res['SecurityInfoPreference'] = null !== $this->securityInfoPreference ? $this->securityInfoPreference->toArray($noStream) : $this->securityInfoPreference;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecurityInfoPreference'])) {
            $model->securityInfoPreference = securityInfoPreference::fromMap($map['SecurityInfoPreference']);
        }

        return $model;
    }
}
