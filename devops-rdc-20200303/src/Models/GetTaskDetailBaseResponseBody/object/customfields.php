<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskDetailBaseResponseBody\object;

use AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetTaskDetailBaseResponseBody\object\customfields\value;
use AlibabaCloud\Tea\Model;

class customfields extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var value[]
     */
    public $value;

    /**
     * @var string[]
     */
    public $values;

    /**
     * @var string
     */
    public $customfieldId;
    protected $_name = [
        'type'          => 'Type',
        'value'         => 'Value',
        'values'        => 'Values',
        'customfieldId' => 'CustomfieldId',
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
        if (null !== $this->value) {
            $res['Value'] = [];
            if (null !== $this->value && \is_array($this->value)) {
                $n = 0;
                foreach ($this->value as $item) {
                    $res['Value'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }
        if (null !== $this->customfieldId) {
            $res['CustomfieldId'] = $this->customfieldId;
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
        if (isset($map['Value'])) {
            if (!empty($map['Value'])) {
                $model->value = [];
                $n            = 0;
                foreach ($map['Value'] as $item) {
                    $model->value[$n++] = null !== $item ? value::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = $map['Values'];
            }
        }
        if (isset($map['CustomfieldId'])) {
            $model->customfieldId = $map['CustomfieldId'];
        }

        return $model;
    }
}
