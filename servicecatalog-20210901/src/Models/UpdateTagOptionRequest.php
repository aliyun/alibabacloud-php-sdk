<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Tea\Model;

class UpdateTagOptionRequest extends Model
{
    /**
     * @description Specifies whether to enable the tag option. Valid values:
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
     * @description The ID of the tag option.
     *
     * @example tag-bp1u6mdf3d****
     *
     * @var string
     */
    public $tagOptionId;

    /**
     * @description The value of the tag option.
     *
     * The value can be up to 128 characters in length. It cannot start with `acs:` and cannot contain `http://` or `https://`.
     * @example v1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'active'      => 'Active',
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
     * @return UpdateTagOptionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
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
