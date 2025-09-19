<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDataSourceResponseBody\metaDatas;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDataSourceResponseBody\metaDatas\metaDataFields\operatorList;

class metaDataFields extends Model
{
    /**
     * @var string
     */
    public $filed;

    /**
     * @var string
     */
    public $filedName;

    /**
     * @var operatorList[]
     */
    public $operatorList;

    /**
     * @var string
     */
    public $sample;

    /**
     * @var string
     */
    public $valueType;
    protected $_name = [
        'filed' => 'Filed',
        'filedName' => 'FiledName',
        'operatorList' => 'OperatorList',
        'sample' => 'Sample',
        'valueType' => 'ValueType',
    ];

    public function validate()
    {
        if (\is_array($this->operatorList)) {
            Model::validateArray($this->operatorList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filed) {
            $res['Filed'] = $this->filed;
        }

        if (null !== $this->filedName) {
            $res['FiledName'] = $this->filedName;
        }

        if (null !== $this->operatorList) {
            if (\is_array($this->operatorList)) {
                $res['OperatorList'] = [];
                $n1 = 0;
                foreach ($this->operatorList as $item1) {
                    $res['OperatorList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sample) {
            $res['Sample'] = $this->sample;
        }

        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
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
        if (isset($map['Filed'])) {
            $model->filed = $map['Filed'];
        }

        if (isset($map['FiledName'])) {
            $model->filedName = $map['FiledName'];
        }

        if (isset($map['OperatorList'])) {
            if (!empty($map['OperatorList'])) {
                $model->operatorList = [];
                $n1 = 0;
                foreach ($map['OperatorList'] as $item1) {
                    $model->operatorList[$n1] = operatorList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Sample'])) {
            $model->sample = $map['Sample'];
        }

        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }

        return $model;
    }
}
