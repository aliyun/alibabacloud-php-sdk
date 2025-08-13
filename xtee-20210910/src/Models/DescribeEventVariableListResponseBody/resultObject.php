<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableListResponseBody\resultObject\actions;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableListResponseBody\resultObject\deviceVariables;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableListResponseBody\resultObject\expressionVariables;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableListResponseBody\resultObject\favoriteVariables;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableListResponseBody\resultObject\middleVariables;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableListResponseBody\resultObject\modelVariables;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableListResponseBody\resultObject\nameList;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableListResponseBody\resultObject\nativeVariableFunctions;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableListResponseBody\resultObject\nativeVariables;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableListResponseBody\resultObject\queryVariables;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableListResponseBody\resultObject\selfVariables;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableListResponseBody\resultObject\sysVariables;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableListResponseBody\resultObject\velocityVariables;

class resultObject extends Model
{
    /**
     * @var actions[]
     */
    public $actions;

    /**
     * @var deviceVariables[]
     */
    public $deviceVariables;

    /**
     * @var expressionVariables[]
     */
    public $expressionVariables;

    /**
     * @var favoriteVariables[]
     */
    public $favoriteVariables;

    /**
     * @var middleVariables[]
     */
    public $middleVariables;

    /**
     * @var modelVariables[]
     */
    public $modelVariables;

    /**
     * @var nameList[]
     */
    public $nameList;

    /**
     * @var nativeVariableFunctions[]
     */
    public $nativeVariableFunctions;

    /**
     * @var nativeVariables[]
     */
    public $nativeVariables;

    /**
     * @var queryVariables[]
     */
    public $queryVariables;

    /**
     * @var selfVariables[]
     */
    public $selfVariables;

    /**
     * @var sysVariables[]
     */
    public $sysVariables;

    /**
     * @var mixed[]
     */
    public $thirdVariables;

    /**
     * @var velocityVariables[]
     */
    public $velocityVariables;
    protected $_name = [
        'actions' => 'actions',
        'deviceVariables' => 'deviceVariables',
        'expressionVariables' => 'expressionVariables',
        'favoriteVariables' => 'favoriteVariables',
        'middleVariables' => 'middleVariables',
        'modelVariables' => 'modelVariables',
        'nameList' => 'nameList',
        'nativeVariableFunctions' => 'nativeVariableFunctions',
        'nativeVariables' => 'nativeVariables',
        'queryVariables' => 'queryVariables',
        'selfVariables' => 'selfVariables',
        'sysVariables' => 'sysVariables',
        'thirdVariables' => 'thirdVariables',
        'velocityVariables' => 'velocityVariables',
    ];

    public function validate()
    {
        if (\is_array($this->actions)) {
            Model::validateArray($this->actions);
        }
        if (\is_array($this->deviceVariables)) {
            Model::validateArray($this->deviceVariables);
        }
        if (\is_array($this->expressionVariables)) {
            Model::validateArray($this->expressionVariables);
        }
        if (\is_array($this->favoriteVariables)) {
            Model::validateArray($this->favoriteVariables);
        }
        if (\is_array($this->middleVariables)) {
            Model::validateArray($this->middleVariables);
        }
        if (\is_array($this->modelVariables)) {
            Model::validateArray($this->modelVariables);
        }
        if (\is_array($this->nameList)) {
            Model::validateArray($this->nameList);
        }
        if (\is_array($this->nativeVariableFunctions)) {
            Model::validateArray($this->nativeVariableFunctions);
        }
        if (\is_array($this->nativeVariables)) {
            Model::validateArray($this->nativeVariables);
        }
        if (\is_array($this->queryVariables)) {
            Model::validateArray($this->queryVariables);
        }
        if (\is_array($this->selfVariables)) {
            Model::validateArray($this->selfVariables);
        }
        if (\is_array($this->sysVariables)) {
            Model::validateArray($this->sysVariables);
        }
        if (\is_array($this->thirdVariables)) {
            Model::validateArray($this->thirdVariables);
        }
        if (\is_array($this->velocityVariables)) {
            Model::validateArray($this->velocityVariables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actions) {
            if (\is_array($this->actions)) {
                $res['actions'] = [];
                $n1 = 0;
                foreach ($this->actions as $item1) {
                    $res['actions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->deviceVariables) {
            if (\is_array($this->deviceVariables)) {
                $res['deviceVariables'] = [];
                $n1 = 0;
                foreach ($this->deviceVariables as $item1) {
                    $res['deviceVariables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->expressionVariables) {
            if (\is_array($this->expressionVariables)) {
                $res['expressionVariables'] = [];
                $n1 = 0;
                foreach ($this->expressionVariables as $item1) {
                    $res['expressionVariables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->favoriteVariables) {
            if (\is_array($this->favoriteVariables)) {
                $res['favoriteVariables'] = [];
                $n1 = 0;
                foreach ($this->favoriteVariables as $item1) {
                    $res['favoriteVariables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->middleVariables) {
            if (\is_array($this->middleVariables)) {
                $res['middleVariables'] = [];
                $n1 = 0;
                foreach ($this->middleVariables as $item1) {
                    $res['middleVariables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modelVariables) {
            if (\is_array($this->modelVariables)) {
                $res['modelVariables'] = [];
                $n1 = 0;
                foreach ($this->modelVariables as $item1) {
                    $res['modelVariables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nameList) {
            if (\is_array($this->nameList)) {
                $res['nameList'] = [];
                $n1 = 0;
                foreach ($this->nameList as $item1) {
                    $res['nameList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nativeVariableFunctions) {
            if (\is_array($this->nativeVariableFunctions)) {
                $res['nativeVariableFunctions'] = [];
                $n1 = 0;
                foreach ($this->nativeVariableFunctions as $item1) {
                    $res['nativeVariableFunctions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nativeVariables) {
            if (\is_array($this->nativeVariables)) {
                $res['nativeVariables'] = [];
                $n1 = 0;
                foreach ($this->nativeVariables as $item1) {
                    $res['nativeVariables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->queryVariables) {
            if (\is_array($this->queryVariables)) {
                $res['queryVariables'] = [];
                $n1 = 0;
                foreach ($this->queryVariables as $item1) {
                    $res['queryVariables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->selfVariables) {
            if (\is_array($this->selfVariables)) {
                $res['selfVariables'] = [];
                $n1 = 0;
                foreach ($this->selfVariables as $item1) {
                    $res['selfVariables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sysVariables) {
            if (\is_array($this->sysVariables)) {
                $res['sysVariables'] = [];
                $n1 = 0;
                foreach ($this->sysVariables as $item1) {
                    $res['sysVariables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->thirdVariables) {
            if (\is_array($this->thirdVariables)) {
                $res['thirdVariables'] = [];
                foreach ($this->thirdVariables as $key1 => $value1) {
                    $res['thirdVariables'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->velocityVariables) {
            if (\is_array($this->velocityVariables)) {
                $res['velocityVariables'] = [];
                $n1 = 0;
                foreach ($this->velocityVariables as $item1) {
                    $res['velocityVariables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['actions'])) {
            if (!empty($map['actions'])) {
                $model->actions = [];
                $n1 = 0;
                foreach ($map['actions'] as $item1) {
                    $model->actions[$n1] = actions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['deviceVariables'])) {
            if (!empty($map['deviceVariables'])) {
                $model->deviceVariables = [];
                $n1 = 0;
                foreach ($map['deviceVariables'] as $item1) {
                    $model->deviceVariables[$n1] = deviceVariables::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['expressionVariables'])) {
            if (!empty($map['expressionVariables'])) {
                $model->expressionVariables = [];
                $n1 = 0;
                foreach ($map['expressionVariables'] as $item1) {
                    $model->expressionVariables[$n1] = expressionVariables::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['favoriteVariables'])) {
            if (!empty($map['favoriteVariables'])) {
                $model->favoriteVariables = [];
                $n1 = 0;
                foreach ($map['favoriteVariables'] as $item1) {
                    $model->favoriteVariables[$n1] = favoriteVariables::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['middleVariables'])) {
            if (!empty($map['middleVariables'])) {
                $model->middleVariables = [];
                $n1 = 0;
                foreach ($map['middleVariables'] as $item1) {
                    $model->middleVariables[$n1] = middleVariables::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['modelVariables'])) {
            if (!empty($map['modelVariables'])) {
                $model->modelVariables = [];
                $n1 = 0;
                foreach ($map['modelVariables'] as $item1) {
                    $model->modelVariables[$n1] = modelVariables::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['nameList'])) {
            if (!empty($map['nameList'])) {
                $model->nameList = [];
                $n1 = 0;
                foreach ($map['nameList'] as $item1) {
                    $model->nameList[$n1] = nameList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['nativeVariableFunctions'])) {
            if (!empty($map['nativeVariableFunctions'])) {
                $model->nativeVariableFunctions = [];
                $n1 = 0;
                foreach ($map['nativeVariableFunctions'] as $item1) {
                    $model->nativeVariableFunctions[$n1] = nativeVariableFunctions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['nativeVariables'])) {
            if (!empty($map['nativeVariables'])) {
                $model->nativeVariables = [];
                $n1 = 0;
                foreach ($map['nativeVariables'] as $item1) {
                    $model->nativeVariables[$n1] = nativeVariables::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['queryVariables'])) {
            if (!empty($map['queryVariables'])) {
                $model->queryVariables = [];
                $n1 = 0;
                foreach ($map['queryVariables'] as $item1) {
                    $model->queryVariables[$n1] = queryVariables::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['selfVariables'])) {
            if (!empty($map['selfVariables'])) {
                $model->selfVariables = [];
                $n1 = 0;
                foreach ($map['selfVariables'] as $item1) {
                    $model->selfVariables[$n1] = selfVariables::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['sysVariables'])) {
            if (!empty($map['sysVariables'])) {
                $model->sysVariables = [];
                $n1 = 0;
                foreach ($map['sysVariables'] as $item1) {
                    $model->sysVariables[$n1] = sysVariables::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['thirdVariables'])) {
            if (!empty($map['thirdVariables'])) {
                $model->thirdVariables = [];
                foreach ($map['thirdVariables'] as $key1 => $value1) {
                    $model->thirdVariables[$key1] = $value1;
                }
            }
        }

        if (isset($map['velocityVariables'])) {
            if (!empty($map['velocityVariables'])) {
                $model->velocityVariables = [];
                $n1 = 0;
                foreach ($map['velocityVariables'] as $item1) {
                    $model->velocityVariables[$n1] = velocityVariables::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
