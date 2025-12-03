<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenDataMapResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenDataMapResponseBody\sasScreenTypeList\typeData;

class sasScreenTypeList extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $typeCode;

    /**
     * @var typeData[]
     */
    public $typeData;
    protected $_name = [
        'type' => 'Type',
        'typeCode' => 'TypeCode',
        'typeData' => 'TypeData',
    ];

    public function validate()
    {
        if (\is_array($this->typeData)) {
            Model::validateArray($this->typeData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->typeCode) {
            $res['TypeCode'] = $this->typeCode;
        }

        if (null !== $this->typeData) {
            if (\is_array($this->typeData)) {
                $res['TypeData'] = [];
                $n1 = 0;
                foreach ($this->typeData as $item1) {
                    $res['TypeData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['TypeCode'])) {
            $model->typeCode = $map['TypeCode'];
        }

        if (isset($map['TypeData'])) {
            if (!empty($map['TypeData'])) {
                $model->typeData = [];
                $n1 = 0;
                foreach ($map['TypeData'] as $item1) {
                    $model->typeData[$n1] = typeData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
