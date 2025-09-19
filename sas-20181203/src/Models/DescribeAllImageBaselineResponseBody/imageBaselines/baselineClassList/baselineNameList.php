<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllImageBaselineResponseBody\imageBaselines\baselineClassList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllImageBaselineResponseBody\imageBaselines\baselineClassList\baselineNameList\baselineItemList;

class baselineNameList extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var baselineItemList[]
     */
    public $baselineItemList;

    /**
     * @var string
     */
    public $classKey;

    /**
     * @var string
     */
    public $nameKey;
    protected $_name = [
        'alias' => 'Alias',
        'baselineItemList' => 'BaselineItemList',
        'classKey' => 'ClassKey',
        'nameKey' => 'NameKey',
    ];

    public function validate()
    {
        if (\is_array($this->baselineItemList)) {
            Model::validateArray($this->baselineItemList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        if (null !== $this->baselineItemList) {
            if (\is_array($this->baselineItemList)) {
                $res['BaselineItemList'] = [];
                $n1 = 0;
                foreach ($this->baselineItemList as $item1) {
                    $res['BaselineItemList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->classKey) {
            $res['ClassKey'] = $this->classKey;
        }

        if (null !== $this->nameKey) {
            $res['NameKey'] = $this->nameKey;
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

        if (isset($map['BaselineItemList'])) {
            if (!empty($map['BaselineItemList'])) {
                $model->baselineItemList = [];
                $n1 = 0;
                foreach ($map['BaselineItemList'] as $item1) {
                    $model->baselineItemList[$n1] = baselineItemList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ClassKey'])) {
            $model->classKey = $map['ClassKey'];
        }

        if (isset($map['NameKey'])) {
            $model->nameKey = $map['NameKey'];
        }

        return $model;
    }
}
