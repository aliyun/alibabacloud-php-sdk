<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class CreateAliasRequest extends Model
{
    /**
     * @description The alias of the CMK.
     *
     * The alias must be 1 to 255 characters in length and must contain the prefix `alias/`. The alias cannot be prefixed with the reserved word `alias/acs`.
     * @example alias/example
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description The ID of the CMK. The ID must be globally unique.
     *
     * @example 7906979c-8e06-46a2-be2d-68e3ccbc****
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
     * @return CreateAliasRequest
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
