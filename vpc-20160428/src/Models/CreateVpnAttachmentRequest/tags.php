<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnAttachmentRequest;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description The tag key. The tag key cannot be an empty string.
     *
     * You can specify at most 20 tag keys in each call.
     * @example TagKey
     *
     * @var string
     */
    public $key;

    /**
     * @description The tag value.
     *
     * Each tag key corresponds to one tag value. You can specify at most 20 tag values in each call.
     * @example TagValue
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
