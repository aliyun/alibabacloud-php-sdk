<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetLoginPreferenceResponseBody\loginPreference;
use AlibabaCloud\Tea\Model;

class GetLoginPreferenceResponseBody extends Model
{
    /**
     * @description The logon preference.
     *
     * @var loginPreference
     */
    public $loginPreference;

    /**
     * @description The request ID.
     *
     * @example 8CE8B990-193D-50CE-A604-69F3E7DCE740
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'loginPreference' => 'LoginPreference',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loginPreference) {
            $res['LoginPreference'] = null !== $this->loginPreference ? $this->loginPreference->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLoginPreferenceResponseBody
     */
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
