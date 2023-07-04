<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListTagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of the tag that is added to the resource. You can specify up to 20 tag keys. The tag key cannot be an empty string.
     *
     * The key can be up to 64 characters in length and can contain letters, digits, periods (.), underscores (\_), and hyphens (-). The key must start with a letter but cannot start with `aliyun` or `acs:`. The key cannot contain `http://` or `https://`.
     *
     * >  Specify at least one of the **ResourceId.N** and **Tag.N** parameters (**Tag.N.Key** and **Tag.N.Value**).
     * @example FinanceDept
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the tag that is added to the resource. You can specify up to 20 tag values. The tag value can be an empty string.
     *
     * The value can be up to 128 characters in length and can contain letters, digits, periods (.), underscores (\_), and hyphens (-). The value must start with a letter but cannot start with `aliyun` or `acs:`. The value cannot contain `http://` or `https://`.
     *
     * >  Specify at least one of the **ResourceId.N** and **Tag.N** parameters (**Tag.N.Key** and **Tag.N.Value**).
     * @example FinanceJoshua
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
     * @return tag
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
