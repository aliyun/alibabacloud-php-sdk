<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\CreateTagOptionResponseBody;

use AlibabaCloud\Tea\Model;

class tagOptionDetail extends Model
{
    /**
     * @description Indicates whether the tag option is enabled. Valid values:
     *
     *   true (default)
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $active;

    /**
     * @description The key of the tag option.
     *
     * The key must be 1 to 128 characters in length. It cannot start with `aliyun` or `acs:` and cannot contain `http://` or `https://`.
     * @example k1
     *
     * @var string
     */
    public $key;

    /**
     * @description The ID of the Alibaba Cloud account to which the tag option belongs.
     *
     * @example 133413081827****
     *
     * @var string
     */
    public $owner;

    /**
     * @description The ID of the tag option.
     *
     * @example tag-bp1r3mxq3t****
     *
     * @var string
     */
    public $tagOptionId;

    /**
     * @description The value of the tag option.
     *
     * The value must be 1 to 128 characters in length. It cannot start with `acs:` and cannot contain `http://` or `https://`.
     * @example v1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'active'      => 'Active',
        'key'         => 'Key',
        'owner'       => 'Owner',
        'tagOptionId' => 'TagOptionId',
        'value'       => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->tagOptionId) {
            $res['TagOptionId'] = $this->tagOptionId;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagOptionDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['TagOptionId'])) {
            $model->tagOptionId = $map['TagOptionId'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
