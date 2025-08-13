<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\CompareCopyRuleVariableResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CompareCopyRuleVariableResponseBody\resultObject\custVariableList;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CompareCopyRuleVariableResponseBody\resultObject\eventVariableList;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CompareCopyRuleVariableResponseBody\resultObject\expressionVariableList;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CompareCopyRuleVariableResponseBody\resultObject\nameListVariableList;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CompareCopyRuleVariableResponseBody\resultObject\queryExpressionVariableList;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CompareCopyRuleVariableResponseBody\resultObject\systemVariableList;

class resultObject extends Model
{
    /**
     * @var custVariableList[]
     */
    public $custVariableList;

    /**
     * @var eventVariableList[]
     */
    public $eventVariableList;

    /**
     * @var expressionVariableList[]
     */
    public $expressionVariableList;

    /**
     * @var nameListVariableList[]
     */
    public $nameListVariableList;

    /**
     * @var queryExpressionVariableList[]
     */
    public $queryExpressionVariableList;

    /**
     * @var systemVariableList[]
     */
    public $systemVariableList;
    protected $_name = [
        'custVariableList' => 'CustVariableList',
        'eventVariableList' => 'EventVariableList',
        'expressionVariableList' => 'ExpressionVariableList',
        'nameListVariableList' => 'NameListVariableList',
        'queryExpressionVariableList' => 'QueryExpressionVariableList',
        'systemVariableList' => 'SystemVariableList',
    ];

    public function validate()
    {
        if (\is_array($this->custVariableList)) {
            Model::validateArray($this->custVariableList);
        }
        if (\is_array($this->eventVariableList)) {
            Model::validateArray($this->eventVariableList);
        }
        if (\is_array($this->expressionVariableList)) {
            Model::validateArray($this->expressionVariableList);
        }
        if (\is_array($this->nameListVariableList)) {
            Model::validateArray($this->nameListVariableList);
        }
        if (\is_array($this->queryExpressionVariableList)) {
            Model::validateArray($this->queryExpressionVariableList);
        }
        if (\is_array($this->systemVariableList)) {
            Model::validateArray($this->systemVariableList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->custVariableList) {
            if (\is_array($this->custVariableList)) {
                $res['CustVariableList'] = [];
                $n1 = 0;
                foreach ($this->custVariableList as $item1) {
                    $res['CustVariableList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->eventVariableList) {
            if (\is_array($this->eventVariableList)) {
                $res['EventVariableList'] = [];
                $n1 = 0;
                foreach ($this->eventVariableList as $item1) {
                    $res['EventVariableList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->expressionVariableList) {
            if (\is_array($this->expressionVariableList)) {
                $res['ExpressionVariableList'] = [];
                $n1 = 0;
                foreach ($this->expressionVariableList as $item1) {
                    $res['ExpressionVariableList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nameListVariableList) {
            if (\is_array($this->nameListVariableList)) {
                $res['NameListVariableList'] = [];
                $n1 = 0;
                foreach ($this->nameListVariableList as $item1) {
                    $res['NameListVariableList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->queryExpressionVariableList) {
            if (\is_array($this->queryExpressionVariableList)) {
                $res['QueryExpressionVariableList'] = [];
                $n1 = 0;
                foreach ($this->queryExpressionVariableList as $item1) {
                    $res['QueryExpressionVariableList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->systemVariableList) {
            if (\is_array($this->systemVariableList)) {
                $res['SystemVariableList'] = [];
                $n1 = 0;
                foreach ($this->systemVariableList as $item1) {
                    $res['SystemVariableList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CustVariableList'])) {
            if (!empty($map['CustVariableList'])) {
                $model->custVariableList = [];
                $n1 = 0;
                foreach ($map['CustVariableList'] as $item1) {
                    $model->custVariableList[$n1] = custVariableList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EventVariableList'])) {
            if (!empty($map['EventVariableList'])) {
                $model->eventVariableList = [];
                $n1 = 0;
                foreach ($map['EventVariableList'] as $item1) {
                    $model->eventVariableList[$n1] = eventVariableList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ExpressionVariableList'])) {
            if (!empty($map['ExpressionVariableList'])) {
                $model->expressionVariableList = [];
                $n1 = 0;
                foreach ($map['ExpressionVariableList'] as $item1) {
                    $model->expressionVariableList[$n1] = expressionVariableList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NameListVariableList'])) {
            if (!empty($map['NameListVariableList'])) {
                $model->nameListVariableList = [];
                $n1 = 0;
                foreach ($map['NameListVariableList'] as $item1) {
                    $model->nameListVariableList[$n1] = nameListVariableList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['QueryExpressionVariableList'])) {
            if (!empty($map['QueryExpressionVariableList'])) {
                $model->queryExpressionVariableList = [];
                $n1 = 0;
                foreach ($map['QueryExpressionVariableList'] as $item1) {
                    $model->queryExpressionVariableList[$n1] = queryExpressionVariableList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SystemVariableList'])) {
            if (!empty($map['SystemVariableList'])) {
                $model->systemVariableList = [];
                $n1 = 0;
                foreach ($map['SystemVariableList'] as $item1) {
                    $model->systemVariableList[$n1] = systemVariableList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
