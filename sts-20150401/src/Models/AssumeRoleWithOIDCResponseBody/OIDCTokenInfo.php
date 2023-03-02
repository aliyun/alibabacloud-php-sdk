<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sts\V20150401\Models\AssumeRoleWithOIDCResponseBody;

use AlibabaCloud\Tea\Model;

class OIDCTokenInfo extends Model
{
    /**
     * @description The audience. If multiple audiences are returned, the audiences are separated by commas (,).
     *
     * The audience is represented by the `aud` field in the OIDC Token.
     * @example 496271242565057****
     *
     * @var string
     */
    public $clientIds;

    /**
     * @description The URL of the issuer,
     *
     * which is represented by the `iss` field in the OIDC Token.
     * @example https://dev-xxxxxx.okta.com
     *
     * @var string
     */
    public $issuer;

    /**
     * @description The subject,
     *
     * which is represented by the `sub` field in the OIDC Token.
     * @example KryrkIdjylZb7agUgCEf****
     *
     * @var string
     */
    public $subject;
    protected $_name = [
        'clientIds' => 'ClientIds',
        'issuer'    => 'Issuer',
        'subject'   => 'Subject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIds) {
            $res['ClientIds'] = $this->clientIds;
        }
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OIDCTokenInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIds'])) {
            $model->clientIds = $map['ClientIds'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }

        return $model;
    }
}
