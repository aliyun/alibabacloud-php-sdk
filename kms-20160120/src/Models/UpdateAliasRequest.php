<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class UpdateAliasRequest extends Model
{
    /**
     * @description The alias that you want to bind.
     *
     * This parameter is required.
     * @example alias/example
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description The ID of the CMK. The ID must be globally unique.
     *
     * This parameter is required.
     * @example 1234abcd-12ab-34cd-56ef-12345678****
     *
     * @var string
     */
    public $keyId;
    protected $_name = [
        'aliasName' => 'AliasName',
        'keyId'     => 'KeyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return UpdateAliasRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }

        return $model;
    }
}
