<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DataModuleMapListSpnTypeMapListValue\filterModules;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DataModuleMapListSpnTypeMapListValue\showModules;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->filterModules) {
            $res['FilterModules'] = [];
            if (null !== $this->filterModules && \is_array($this->filterModules)) {
                $n = 0;
                foreach ($this->filterModules as $item) {
                    $res['FilterModules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->showModules) {
            $res['ShowModules'] = [];
            if (null !== $this->showModules && \is_array($this->showModules)) {
                $n = 0;
                foreach ($this->showModules as $item) {
                    $res['ShowModules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataModuleMapListSpnTypeMapListValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FilterModules'])) {
            if (!empty($map['FilterModules'])) {
                $model->filterModules = [];
                $n = 0;
                foreach ($map['FilterModules'] as $item) {
                    $model->filterModules[$n++] = null !== $item ? filterModules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ShowModules'])) {
            if (!empty($map['ShowModules'])) {
                $model->showModules = [];
                $n = 0;
                foreach ($map['ShowModules'] as $item) {
                    $model->showModules[$n++] = null !== $item ? showModules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
