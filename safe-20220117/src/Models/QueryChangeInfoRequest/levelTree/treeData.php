<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\QueryChangeInfoRequest\levelTree;

use AlibabaCloud\Dara\Model;

class treeData extends Model
{
    /**
     * @var mixed[]
     */
    public $data;

    /**
     * @var string
     */
    public $dataSubType;

    /**
     * @var string[]
     */
    public $value;
    protected $_name = [
        'data' => 'Data',
        'dataSubType' => 'DataSubType',
        'value' => 'Value',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        if (\is_array($this->value)) {
            Model::validateArray($this->value);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['Data'] = [];
                $n1 = 0;
                foreach ($this->data as $item1) {
                    $res['Data'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dataSubType) {
            $res['DataSubType'] = $this->dataSubType;
        }

        if (null !== $this->value) {
            if (\is_array($this->value)) {
                $res['Value'] = [];
                $n1 = 0;
                foreach ($this->value as $item1) {
                    $res['Value'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n1 = 0;
                foreach ($map['Data'] as $item1) {
                    $model->data[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DataSubType'])) {
            $model->dataSubType = $map['DataSubType'];
        }

        if (isset($map['Value'])) {
            if (!empty($map['Value'])) {
                $model->value = [];
                $n1 = 0;
                foreach ($map['Value'] as $item1) {
                    $model->value[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
