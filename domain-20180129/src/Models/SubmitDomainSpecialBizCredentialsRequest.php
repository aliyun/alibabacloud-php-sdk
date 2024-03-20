<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class SubmitDomainSpecialBizCredentialsRequest extends Model
{
    /**
     * @description The business ID.
     *
     * @example 219
     *
     * @var int
     */
    public $bizId;

    /**
     * @description The certificate information.
     *
     * @example [{"credentialType":"SHSQB",""credentialUrl":"11212121/1212d**\/sqb.jpg"},{"credentialType":"SFZZM",""credentialUrl":"11212121/1212d**\/sfzzm.jpg"}]
     *
     * @var string
     */
    public $credentials;

    /**
     * @description The extended information.
     *
     * @example {\"addTransferLock\":true}
     *
     * @var string
     */
    public $extend;

    /**
     * @description The IP address of the client.
     *
     * @example 127.0.0.1
     *
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'bizId'        => 'BizId',
        'credentials'  => 'Credentials',
        'extend'       => 'Extend',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->credentials) {
            $res['Credentials'] = $this->credentials;
        }
        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitDomainSpecialBizCredentialsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Credentials'])) {
            $model->credentials = $map['Credentials'];
        }
        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
