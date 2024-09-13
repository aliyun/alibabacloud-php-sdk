<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\ListTagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The key of tag N of the instance. Valid values of N: **1** to **20**.
     *
     *   The key cannot start with `aliyun`, `acs:`, `http://`, or `https://`.
     *   The key must be up to 64 characters in length.
     *   The tag key cannot be an empty string.
     *
     * @example team
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of a tag that is attached to the topics you want to query. This parameter is not required. If you configure this parameter, you must also configure the **Key** parameter.**** If you include the Key and Value parameters in a request, this operation queries only the topics that use the specified tags. If you do not include these parameters in a request, this operation queries all topics that you can access.
     *
     *   Valid values of N: 1 to 20.
     *   The value of this parameter can be an empty string.
     *   The tag key can be up to 128 characters in length and cannot contain http:// or https://. The tag key cannot start with acs: or aliyun.
     *
     * @example tagValue
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
