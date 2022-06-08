<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class DescribeSecretRequest extends Model
{
    /**
     * @var string
     */
    public $fetchTags;

    /**
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
