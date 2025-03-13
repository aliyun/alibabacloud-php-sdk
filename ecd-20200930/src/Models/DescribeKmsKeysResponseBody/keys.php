<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeKmsKeysResponseBody;

use AlibabaCloud\Tea\Model;

class keys extends Model
{
    /**
     * @description The alias of the key.
     *
     * @example TestAlias
     *
     * @var string
     */
    public $alias;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the key in KMS.
     *
     * @example acs:kms:cn-hangzhou:154035569884****:key/05754286-3ba2-4fa6-8d41-4323aca6****
     *
     * @var string
     */
    public $arn;

    /**
     * @description The ID of the key.
     *
     * @example 05754286-3ba2-4fa6-8d41-4323aca6****
     *
     * @var string
     */
    public $keyId;

    /**
     * @description The type of the key.
     *
     * @example ServiceKey
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'alias' => 'Alias',
        'arn'   => 'Arn',
        'keyId' => 'KeyId',
        'type'  => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
