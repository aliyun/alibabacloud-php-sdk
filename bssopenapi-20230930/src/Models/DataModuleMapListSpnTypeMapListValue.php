<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DataModuleMapListSpnTypeMapListValue\filterModules;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DataModuleMapListSpnTypeMapListValue\showModules;

class DataModuleMapListSpnTypeMapListValue extends Model
{
    /**
     * @var filterModules[]
     */
    public $filterModules;

    /**
     * @var showModules[]
     */
    public $showModules;
    protected $_name = [
        'filterModules' => 'FilterModules',
        'showModules' => 'ShowModules',
    ];

    public function validate()
    {
        if (\is_array($this->filterModules)) {
            Model::validateArray($this->filterModules);
        }
        if (\is_array($this->showModules)) {
            Model::validateArray($this->showModules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filterModules) {
            if (\is_array($this->filterModules)) {
                $res['FilterModules'] = [];
                $n1 = 0;
                foreach ($this->filterModules as $item1) {
                    $res['FilterModules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->showModules) {
            if (\is_array($this->showModules)) {
                $res['ShowModules'] = [];
                $n1 = 0;
                foreach ($this->showModules as $item1) {
                    $res['ShowModules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FilterModules'])) {
            if (!empty($map['FilterModules'])) {
                $model->filterModules = [];
                $n1 = 0;
                foreach ($map['FilterModules'] as $item1) {
                    $model->filterModules[$n1] = filterModules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ShowModules'])) {
            if (!empty($map['ShowModules'])) {
                $model->showModules = [];
                $n1 = 0;
                foreach ($map['ShowModules'] as $item1) {
                    $model->showModules[$n1] = showModules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
