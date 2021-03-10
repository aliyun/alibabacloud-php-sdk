<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceOriginalPropertyStatusResponse\data\list_;

use AlibabaCloud\Tea\Model;

class propertyStatusDataInfo extends Model
{
    /**
     * @var string
     */
    public $identifier;

    /**
     * @var string
     */
    public $value;

    /**
     * @var int
     */
    public $time;
    protected $_name = [
        'identifier' => 'Identifier',
        'value'      => 'Value',
        'time'       => 'Time',
    ];

    public function validate()
    {
        Model::validateRequired('identifier', $this->identifier, true);
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('time', $this->time, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyStatusDataInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
