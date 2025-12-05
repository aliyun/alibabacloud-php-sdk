<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListAliasesByKeyIdResponseBody\aliases;

use AlibabaCloud\Dara\Model;

class alias extends Model
{
    /**
     * @var string
     */
    public $aliasArn;

    /**
     * @var string
     */
    public $aliasName;

    /**
     * @var string
     */
    public $keyId;
    protected $_name = [
        'aliasArn' => 'AliasArn',
        'aliasName' => 'AliasName',
        'keyId' => 'KeyId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
