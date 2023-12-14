<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertSceneByEventResponseBody\data;

use AlibabaCloud\Tea\Model;

class targets extends Model
{
    /**
     * @description The display name of the entity attribute field that can be added to the whitelist.
     *
     * @example host uuid
     *
     * @var string
     */
    public $name;

    /**
     * @description The entity attribute field that can be added to the whitelist.
     *
     * @example host_uuid
     *
     * @var string
     */
    public $type;

    /**
     * @description The right operand that is displayed by default in the whitelist rule.
     *
     * @example 441862da-a539-4cc0-a00d-47395582****
     *
     * @var string
     */
    public $value;

    /**
     * @description The supported right operands of the whitelist rule.
     *
     * @example ["441862da-a539-4cc0-a00d-473955826881"]
     *
     * @var string[]
     */
    public $values;
    protected $_name = [
        'name'   => 'Name',
        'type'   => 'Type',
        'value'  => 'Value',
        'values' => 'Values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = $map['Values'];
            }
        }

        return $model;
    }
}
