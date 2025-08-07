<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSchemeTaskConfigResponseBody\data\dataConfig\assignConfigs;

use AlibabaCloud\Dara\Model;

class assignConfigContests extends Model
{
    /**
     * @var int
     */
    public $dataType;

    /**
     * @var mixed[]
     */
    public $listObject;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $symbol;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'dataType' => 'DataType',
        'listObject' => 'ListObject',
        'name' => 'Name',
        'symbol' => 'Symbol',
        'value' => 'Value',
    ];

    public function validate()
    {
        if (\is_array($this->listObject)) {
            Model::validateArray($this->listObject);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->listObject) {
            if (\is_array($this->listObject)) {
                $res['ListObject'] = [];
                $n1 = 0;
                foreach ($this->listObject as $item1) {
                    $res['ListObject'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->symbol) {
            $res['Symbol'] = $this->symbol;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['ListObject'])) {
            if (!empty($map['ListObject'])) {
                $model->listObject = [];
                $n1 = 0;
                foreach ($map['ListObject'] as $item1) {
                    $model->listObject[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Symbol'])) {
            $model->symbol = $map['Symbol'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
