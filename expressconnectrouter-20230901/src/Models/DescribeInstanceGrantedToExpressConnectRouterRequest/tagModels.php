<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeInstanceGrantedToExpressConnectRouterRequest;

use AlibabaCloud\Tea\Model;

class tagModels extends Model
{
    /**
     * @description The tag key. You can specify up to 20 tag keys. The tag key cannot be an empty string.
     *
     * The tag key can be up to 128 characters in length and cannot contain `http://` or `https://`. The tag key cannot start with `acs:` or `aliyun`.
     *
     * @example key
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The tag value. You can specify up to 20 tag values. The tag value cannot be an empty string.
     *
     * The tag value can be up to 128 characters in length and cannot contain `http://` or `https://`. The tag value cannot start with `acs:` or `aliyun`.
     *
     * @example value
     *
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'tagKey' => 'TagKey',
        'tagValue' => 'TagValue',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }

        return $model;
    }
}
