<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouterInterfacesResponseBody\routerInterfaceSet\routerInterfaceType\tags;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description The key of the resource tag. At least one tag key must be entered, and a maximum of 20 tag keys are supported. If this value needs to be passed in, it cannot be an empty string.
     *
     * A tag key can support up to 128 characters, cannot start with \"aliyun\" or \"acs:\", and cannot contain \"http://\" or \"https://\".
     * @example FinanceDept
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the resource tag. A maximum of 20 tag values can be entered. If this value needs to be passed in, an empty string can be entered.
     *
     * A maximum of 128 characters are supported, it cannot start with \"aliyun\" or \"acs:\", and it cannot contain \"http://\" or \"https://\".
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
