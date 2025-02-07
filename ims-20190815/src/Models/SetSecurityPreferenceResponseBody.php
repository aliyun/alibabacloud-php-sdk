<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\SetSecurityPreferenceResponseBody\securityPreference;

class SetSecurityPreferenceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var securityPreference
     */
    public $securityPreference;
    protected $_name = [
        'requestId'          => 'RequestId',
        'securityPreference' => 'SecurityPreference',
    ];

    public function validate()
    {
        if (null !== $this->securityPreference) {
            $this->securityPreference->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityPreference) {
            $res['SecurityPreference'] = null !== $this->securityPreference ? $this->securityPreference->toArray($noStream) : $this->securityPreference;
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

        if (isset($map['SecurityPreference'])) {
            $model->securityPreference = securityPreference::fromMap($map['SecurityPreference']);
        }

        return $model;
    }
}
