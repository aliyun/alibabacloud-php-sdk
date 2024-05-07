<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class CreateSignatureRequest extends Model
{
    /**
     * @example 5bbfb884-1186-4d48-906b-88d586770f6b
     *
     * @var string
     */
    public $appId;

    /**
     * @example {"version":"1.0.0"}
     *
     * @var string
     */
    public $clientBaseParam;

    /**
     * @example 1.0.001
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @example 300
     *
     * @var int
     */
    public $expireTime;

    /**
     * @example 550070734466****
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'appId'           => 'AppId',
        'clientBaseParam' => 'ClientBaseParam',
        'clientVersion'   => 'ClientVersion',
        'expireTime'      => 'ExpireTime',
        'uid'             => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->clientBaseParam) {
            $res['ClientBaseParam'] = $this->clientBaseParam;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSignatureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ClientBaseParam'])) {
            $model->clientBaseParam = $map['ClientBaseParam'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
