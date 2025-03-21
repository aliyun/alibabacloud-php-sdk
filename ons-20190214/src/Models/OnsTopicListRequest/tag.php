<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicListRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of the tag that is attached to the topics you want to query. This parameter is not required. If you configure this parameter, you must also configure the **Value** parameter.**** If you include the Key and Value parameters in a request, this operation queries only the topics that use the specified tag. If you do not include these parameters in a request, this operation queries all topics that you can access.
     *
     *   The value of this parameter cannot be an empty string.
     *   A tag value can be up to 128 characters in length and cannot start with `acs:` or `aliyun`. It cannot contain `http://` or `https://`.
     *
     * This parameter is required.
     *
     * @example CartService
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the tag that is attached to the topics you want to query. This parameter is not required. If you configure this parameter, you must also configure the **Key** parameter.**** If you include the Key and Value parameters in a request, this operation queries only the topics that use the specified tag. If you do not include these parameters in a request, this operation queries all topics that you can access.
     *
     *   The value of this parameter can be an empty string.
     *   A tag key can be up to 128 characters in length and cannot contain `http://` or `https://`. It cannot start with `acs:` or `aliyun`.
     *
     * This parameter is required.
     *
     * @example ServiceA
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
