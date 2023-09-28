<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\CreateProvisionedProductPlanRequest;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description The key of the custom tag.
     *
     * The key can be up to 128 characters in length, and cannot start with `acs:` or `aliyun`. The tag key cannot contain `http://` or `https://`.
     * @example k1
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the custom tag.
     *
     * The value can be up to 128 characters in length, and cannot start with `acs:`. The tag value cannot contain `http://` or `https://`.
     * @example v1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

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
