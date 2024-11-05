<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\TagResourcesRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description The tag key of the bastion host. You can specify up to 20 tags for the bastion host.
     *
     * > - Thekey cannot be an empty string. The key can be up to 128 characters in length.
     * > - It cannot start with **aliyun** or **acs:**, and cannot contain **http://** or **https://**.
     * @example operation
     *
     * @var string
     */
    public $key;

    /**
     * @description The tag value of the bastion host.\\
     * You can specify up to 20 tags for the bastion host.
     *
     * > *   The value can be a string of up to 128 characters or an empty string.
     * > *   It cannot start with **aliyun** or **acs:**, and cannot contain **http://** or **https://**.
     * @example operation_test
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
