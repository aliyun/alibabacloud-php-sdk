<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventVariableListResponseBody;

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
use AlibabaCloud\Tea\Model;

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
        'actions'                 => 'actions',
        'deviceVariables'         => 'deviceVariables',
        'expressionVariables'     => 'expressionVariables',
        'favoriteVariables'       => 'favoriteVariables',
        'middleVariables'         => 'middleVariables',
        'modelVariables'          => 'modelVariables',
        'nameList'                => 'nameList',
        'nativeVariableFunctions' => 'nativeVariableFunctions',
        'nativeVariables'         => 'nativeVariables',
        'queryVariables'          => 'queryVariables',
        'selfVariables'           => 'selfVariables',
        'sysVariables'            => 'sysVariables',
        'thirdVariables'          => 'thirdVariables',
        'velocityVariables'       => 'velocityVariables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actions) {
            $res['actions'] = [];
            if (null !== $this->actions && \is_array($this->actions)) {
                $n = 0;
                foreach ($this->actions as $item) {
                    $res['actions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->deviceVariables) {
            $res['deviceVariables'] = [];
            if (null !== $this->deviceVariables && \is_array($this->deviceVariables)) {
                $n = 0;
                foreach ($this->deviceVariables as $item) {
                    $res['deviceVariables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->expressionVariables) {
            $res['expressionVariables'] = [];
            if (null !== $this->expressionVariables && \is_array($this->expressionVariables)) {
                $n = 0;
                foreach ($this->expressionVariables as $item) {
                    $res['expressionVariables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->favoriteVariables) {
            $res['favoriteVariables'] = [];
            if (null !== $this->favoriteVariables && \is_array($this->favoriteVariables)) {
                $n = 0;
                foreach ($this->favoriteVariables as $item) {
                    $res['favoriteVariables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->middleVariables) {
            $res['middleVariables'] = [];
            if (null !== $this->middleVariables && \is_array($this->middleVariables)) {
                $n = 0;
                foreach ($this->middleVariables as $item) {
                    $res['middleVariables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->modelVariables) {
            $res['modelVariables'] = [];
            if (null !== $this->modelVariables && \is_array($this->modelVariables)) {
                $n = 0;
                foreach ($this->modelVariables as $item) {
                    $res['modelVariables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nameList) {
            $res['nameList'] = [];
            if (null !== $this->nameList && \is_array($this->nameList)) {
                $n = 0;
                foreach ($this->nameList as $item) {
                    $res['nameList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nativeVariableFunctions) {
            $res['nativeVariableFunctions'] = [];
            if (null !== $this->nativeVariableFunctions && \is_array($this->nativeVariableFunctions)) {
                $n = 0;
                foreach ($this->nativeVariableFunctions as $item) {
                    $res['nativeVariableFunctions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nativeVariables) {
            $res['nativeVariables'] = [];
            if (null !== $this->nativeVariables && \is_array($this->nativeVariables)) {
                $n = 0;
                foreach ($this->nativeVariables as $item) {
                    $res['nativeVariables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->queryVariables) {
            $res['queryVariables'] = [];
            if (null !== $this->queryVariables && \is_array($this->queryVariables)) {
                $n = 0;
                foreach ($this->queryVariables as $item) {
                    $res['queryVariables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->selfVariables) {
            $res['selfVariables'] = [];
            if (null !== $this->selfVariables && \is_array($this->selfVariables)) {
                $n = 0;
                foreach ($this->selfVariables as $item) {
                    $res['selfVariables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sysVariables) {
            $res['sysVariables'] = [];
            if (null !== $this->sysVariables && \is_array($this->sysVariables)) {
                $n = 0;
                foreach ($this->sysVariables as $item) {
                    $res['sysVariables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->thirdVariables) {
            $res['thirdVariables'] = $this->thirdVariables;
        }
        if (null !== $this->velocityVariables) {
            $res['velocityVariables'] = [];
            if (null !== $this->velocityVariables && \is_array($this->velocityVariables)) {
                $n = 0;
                foreach ($this->velocityVariables as $item) {
                    $res['velocityVariables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['actions'])) {
            if (!empty($map['actions'])) {
                $model->actions = [];
                $n              = 0;
                foreach ($map['actions'] as $item) {
                    $model->actions[$n++] = null !== $item ? actions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['deviceVariables'])) {
            if (!empty($map['deviceVariables'])) {
                $model->deviceVariables = [];
                $n                      = 0;
                foreach ($map['deviceVariables'] as $item) {
                    $model->deviceVariables[$n++] = null !== $item ? deviceVariables::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['expressionVariables'])) {
            if (!empty($map['expressionVariables'])) {
                $model->expressionVariables = [];
                $n                          = 0;
                foreach ($map['expressionVariables'] as $item) {
                    $model->expressionVariables[$n++] = null !== $item ? expressionVariables::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['favoriteVariables'])) {
            if (!empty($map['favoriteVariables'])) {
                $model->favoriteVariables = [];
                $n                        = 0;
                foreach ($map['favoriteVariables'] as $item) {
                    $model->favoriteVariables[$n++] = null !== $item ? favoriteVariables::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['middleVariables'])) {
            if (!empty($map['middleVariables'])) {
                $model->middleVariables = [];
                $n                      = 0;
                foreach ($map['middleVariables'] as $item) {
                    $model->middleVariables[$n++] = null !== $item ? middleVariables::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['modelVariables'])) {
            if (!empty($map['modelVariables'])) {
                $model->modelVariables = [];
                $n                     = 0;
                foreach ($map['modelVariables'] as $item) {
                    $model->modelVariables[$n++] = null !== $item ? modelVariables::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['nameList'])) {
            if (!empty($map['nameList'])) {
                $model->nameList = [];
                $n               = 0;
                foreach ($map['nameList'] as $item) {
                    $model->nameList[$n++] = null !== $item ? nameList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['nativeVariableFunctions'])) {
            if (!empty($map['nativeVariableFunctions'])) {
                $model->nativeVariableFunctions = [];
                $n                              = 0;
                foreach ($map['nativeVariableFunctions'] as $item) {
                    $model->nativeVariableFunctions[$n++] = null !== $item ? nativeVariableFunctions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['nativeVariables'])) {
            if (!empty($map['nativeVariables'])) {
                $model->nativeVariables = [];
                $n                      = 0;
                foreach ($map['nativeVariables'] as $item) {
                    $model->nativeVariables[$n++] = null !== $item ? nativeVariables::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['queryVariables'])) {
            if (!empty($map['queryVariables'])) {
                $model->queryVariables = [];
                $n                     = 0;
                foreach ($map['queryVariables'] as $item) {
                    $model->queryVariables[$n++] = null !== $item ? queryVariables::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['selfVariables'])) {
            if (!empty($map['selfVariables'])) {
                $model->selfVariables = [];
                $n                    = 0;
                foreach ($map['selfVariables'] as $item) {
                    $model->selfVariables[$n++] = null !== $item ? selfVariables::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['sysVariables'])) {
            if (!empty($map['sysVariables'])) {
                $model->sysVariables = [];
                $n                   = 0;
                foreach ($map['sysVariables'] as $item) {
                    $model->sysVariables[$n++] = null !== $item ? sysVariables::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['thirdVariables'])) {
            $model->thirdVariables = $map['thirdVariables'];
        }
        if (isset($map['velocityVariables'])) {
            if (!empty($map['velocityVariables'])) {
                $model->velocityVariables = [];
                $n                        = 0;
                foreach ($map['velocityVariables'] as $item) {
                    $model->velocityVariables[$n++] = null !== $item ? velocityVariables::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
