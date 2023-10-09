<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\ListTagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The tag key.
     *
     *   Valid values of N: 1 to 20.
     *   If this parameter is not configured, all tag keys are matched.
     *   The tag key can be up to 128 characters in length. The tag value cannot start with acs: or aliyun or contain [http:// or https://.](http://https://。)
     *
     * @example FinanceDept
     *
     * @var string
     */
    public $key;

    /**
     * @description The tag value.
     *
     *   Valid values of N: 1 to 20.
     *   If the Key parameter is not configured, you cannot configure this parameter. If this parameter is not configured, all tag values are matched.
     *   The tag value can be 1 to 128 characters in length. The tag value cannot start with acs: or aliyun or contain [http:// or https://.](http://https://。)
     *
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
