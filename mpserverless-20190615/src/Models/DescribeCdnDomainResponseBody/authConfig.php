<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeCdnDomainResponseBody;

use AlibabaCloud\Tea\Model;

class authConfig extends Model
{
    /**
     * @example 3600
     *
     * @var int
     */
    public $authDelta;

    /**
     * @example SL4ZB****
     *
     * @var string
     */
    public $authKey;

    /**
     * @example no_auth
     *
     * @var string
     */
    public $authType;

    /**
     * @example 25950108534****
     *
     * @var string
     */
    public $configId;
    protected $_name = [
        'authDelta' => 'AuthDelta',
        'authKey'   => 'AuthKey',
        'authType'  => 'AuthType',
        'configId'  => 'configId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authDelta) {
            $res['AuthDelta'] = $this->authDelta;
        }
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }
        if (null !== $this->configId) {
            $res['configId'] = $this->configId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthDelta'])) {
            $model->authDelta = $map['AuthDelta'];
        }
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }
        if (isset($map['configId'])) {
            $model->configId = $map['configId'];
        }

        return $model;
    }
}
