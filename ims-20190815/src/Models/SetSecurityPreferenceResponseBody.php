<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\SetSecurityPreferenceResponseBody\securityPreference;
use AlibabaCloud\Tea\Model;

class SetSecurityPreferenceResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 17494710-B4BA-4185-BBBB-C1A6ABDE1639
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details of security preferences.
     *
     * @var securityPreference
     */
    public $securityPreference;
    protected $_name = [
        'requestId'          => 'RequestId',
        'securityPreference' => 'SecurityPreference',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityPreference) {
            $res['SecurityPreference'] = null !== $this->securityPreference ? $this->securityPreference->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetSecurityPreferenceResponseBody
     */
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
