<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListAliasesByKeyIdResponseBody\aliases;

use AlibabaCloud\Tea\Model;

class alias extends Model
{
    /**
     * @var string
     */
    public $aliasArn;

    /**
     * @var string
     */
    public $keyId;

    /**
     * @var string
     */
    public $aliasName;
    protected $_name = [
        'aliasArn'  => 'AliasArn',
        'keyId'     => 'KeyId',
        'aliasName' => 'AliasName',
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
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
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
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }

        return $model;
    }
}
