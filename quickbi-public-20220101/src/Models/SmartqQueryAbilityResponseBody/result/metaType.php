<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\SmartqQueryAbilityResponseBody\result;

use AlibabaCloud\Tea\Model;

class metaType extends Model
{
    /**
     * @description Column tuple name.
     *
     * @example Polar***STPS
     *
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $type;

    /**
     * @description Column tuple type.
     *
     * @example string
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key' => 'Key',
        'type' => 'Type',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metaType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
