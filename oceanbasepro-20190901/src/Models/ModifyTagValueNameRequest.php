<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ModifyTagValueNameRequest extends Model
{
    /**
     * @description The name of the tag group.
     *
     * This parameter is required.
     * @example Tag group 1
     *
     * @var string
     */
    public $key;

    /**
     * @description The new name of the tag.
     *
     * This parameter is required.
     * @example Tag 2
     *
     * @var string
     */
    public $newValue;

    /**
     * @description The name of the tag.
     *
     * This parameter is required.
     * @example Tag 1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'      => 'Key',
        'newValue' => 'NewValue',
        'value'    => 'Value',
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
        if (null !== $this->newValue) {
            $res['NewValue'] = $this->newValue;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyTagValueNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['NewValue'])) {
            $model->newValue = $map['NewValue'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
