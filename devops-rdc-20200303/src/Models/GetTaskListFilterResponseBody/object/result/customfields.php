<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskListFilterResponseBody\object\result;

use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskListFilterResponseBody\object\result\customfields\value;
use AlibabaCloud\Tea\Model;

class customfields extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $customfieldId;

    /**
     * @var string
     */
    public $values;

    /**
     * @var value[]
     */
    public $value;
    protected $_name = [
        'type'          => 'Type',
        'customfieldId' => 'CustomfieldId',
        'values'        => 'Values',
        'value'         => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->customfieldId) {
            $res['CustomfieldId'] = $this->customfieldId;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }
        if (null !== $this->value) {
            $res['Value'] = [];
            if (null !== $this->value && \is_array($this->value)) {
                $n = 0;
                foreach ($this->value as $item) {
                    $res['Value'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customfields
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['CustomfieldId'])) {
            $model->customfieldId = $map['CustomfieldId'];
        }
        if (isset($map['Values'])) {
            $model->values = $map['Values'];
        }
        if (isset($map['Value'])) {
            if (!empty($map['Value'])) {
                $model->value = [];
                $n            = 0;
                foreach ($map['Value'] as $item) {
                    $model->value[$n++] = null !== $item ? value::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
