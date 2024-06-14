<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class DescribeSecretRequest extends Model
{
    /**
     * @description Specifies whether to return the resource tags of the secret. Valid values:
     *
     *   true: The resource tags are returned.
     *   false: The resource tags are not returned. This is the default value.
     *
     * @example true
     *
     * @var string
     */
    public $fetchTags;

    /**
     * @description The name of the secret.
     *
     * This parameter is required.
     * @example secret001
     *
     * @var string
     */
    public $secretName;
    protected $_name = [
        'fetchTags'  => 'FetchTags',
        'secretName' => 'SecretName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fetchTags) {
            $res['FetchTags'] = $this->fetchTags;
        }
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecretRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FetchTags'])) {
            $model->fetchTags = $map['FetchTags'];
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }

        return $model;
    }
}
