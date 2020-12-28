<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\GetSecurityPreferenceResponseBody\securityPreference;
use AlibabaCloud\Tea\Model;

class GetSecurityPreferenceResponseBody extends Model
{
    /**
     * @var securityPreference
     */
    public $securityPreference;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'securityPreference' => 'SecurityPreference',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityPreference) {
            $res['SecurityPreference'] = null !== $this->securityPreference ? $this->securityPreference->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSecurityPreferenceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityPreference'])) {
            $model->securityPreference = securityPreference::fromMap($map['SecurityPreference']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
