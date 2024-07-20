<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListAclsRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The tag key of the ACL. The value of this parameter cannot be an empty string.
     *
     * You can specify a maximum of 20 tag keys.
     * @example tag-key
     *
     * @var string
     */
    public $key;

    /**
     * @description The tag value of the ACL. The tag value can be an empty string.
     *
     * You can specify a maximum of 20 tag values.
     * @example tag-value
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
