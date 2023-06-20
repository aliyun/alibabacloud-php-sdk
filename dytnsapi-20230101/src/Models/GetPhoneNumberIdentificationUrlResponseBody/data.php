<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20230101\Models\GetPhoneNumberIdentificationUrlResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example https://global-ip-auth.dycpaas.com/global/biz/ip_auth/start?ipa_s_c_c=IPF0000000000000******&ipa_s_i=8636b75e2fcb40c53ffecc2b59******
     *
     * @var string
     */
    public $identificationUrl;

    /**
     * @example 8636b75e2fcb40c53ffecc2b5947115c.149b03d2a7494e6e8f5b34c915245815.707c7f0d93f4409db0761aa5da94ce01.1686******041
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'identificationUrl' => 'IdentificationUrl',
        'sessionId'         => 'SessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->identificationUrl) {
            $res['IdentificationUrl'] = $this->identificationUrl;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IdentificationUrl'])) {
            $model->identificationUrl = $map['IdentificationUrl'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
