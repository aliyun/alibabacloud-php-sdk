<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models\CreateCertificateRequestRequest;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description The tag key of the resource. You can specify up to 20 tag keys. You cannot specify empty strings as tag keys.
     *
     * The key can be up to 64 characters in length and can contain letters, digits, periods (.), underscores (_), and hyphens (-). The key must start with a letter but cannot start with `aliyun` or `acs:`. The key cannot contain `http://` or `https://`.
     *
     * >  You must specify at least one of **Tag.N** (**Tag.N.Key** and **Tag.N.Value**).
     *
     * @example acs:rm:rgId
     *
     * @var string
     */
    public $key;

    /**
     * @description The tag value. You can specify up to 20 tag values. The tag value can be an empty string.
     *
     * The tag value cannot exceed 128 characters in length, and can contain digits, periods (.), underscores (_), and hyphens (-). The key must start with a letter but cannot start with `aliyun` or `acs:`. The key cannot contain `http://` or `https://`.
     *
     * @example test
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key' => 'Key',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
