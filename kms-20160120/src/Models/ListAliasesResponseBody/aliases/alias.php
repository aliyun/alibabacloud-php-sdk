<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListAliasesResponseBody\aliases;

use AlibabaCloud\Tea\Model;

class alias extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the alias.
     *
     * @example acs:kms:cn-hangzhou:123456:alias/ExampleAlias1
     *
     * @var string
     */
    public $aliasArn;

    /**
     * @description The ID of the alias.
     *
     * @example alias/ExampleAlias1
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description The CMK to which the alias belongs.
     *
     * @example 08c33a6f-4e0a-4a1b-a3fa-7ddfa1d****
     *
     * @var string
     */
    public $keyId;
    protected $_name = [
        'aliasArn'  => 'AliasArn',
        'aliasName' => 'AliasName',
        'keyId'     => 'KeyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasArn) {
            $res['AliasArn'] = $this->aliasArn;
        }
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alias
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasArn'])) {
            $model->aliasArn = $map['AliasArn'];
        }
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }

        return $model;
    }
}
