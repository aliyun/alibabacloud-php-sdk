<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllImageBaselineResponseBody\imageBaselines;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllImageBaselineResponseBody\imageBaselines\baselineClassList\baselineNameList;

class baselineClassList extends Model
{
    /**
     * @var string
     */
    public $alias;
    /**
     * @var baselineNameList[]
     */
    public $baselineNameList;
    /**
     * @var string
     */
    public $classKey;
    protected $_name = [
        'alias'            => 'Alias',
        'baselineNameList' => 'BaselineNameList',
        'classKey'         => 'ClassKey',
    ];

    public function validate()
    {
        if (\is_array($this->baselineNameList)) {
            Model::validateArray($this->baselineNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        if (null !== $this->baselineNameList) {
            if (\is_array($this->baselineNameList)) {
                $res['BaselineNameList'] = [];
                $n1                      = 0;
                foreach ($this->baselineNameList as $item1) {
                    $res['BaselineNameList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->classKey) {
            $res['ClassKey'] = $this->classKey;
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
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        if (isset($map['BaselineNameList'])) {
            if (!empty($map['BaselineNameList'])) {
                $model->baselineNameList = [];
                $n1                      = 0;
                foreach ($map['BaselineNameList'] as $item1) {
                    $model->baselineNameList[$n1++] = baselineNameList::fromMap($item1);
                }
            }
        }

        if (isset($map['ClassKey'])) {
            $model->classKey = $map['ClassKey'];
        }

        return $model;
    }
}
