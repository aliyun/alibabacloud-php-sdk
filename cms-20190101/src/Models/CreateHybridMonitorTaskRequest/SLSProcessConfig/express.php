<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateHybridMonitorTaskRequest\SLSProcessConfig;

use AlibabaCloud\Tea\Model;

class express extends Model
{
    /**
     * @description The alias of the extended field that specifies the result of basic operations that are performed on aggregation results.
     *
     * @example SuccRate
     *
     * @var string
     */
    public $alias;

    /**
     * @description The extended field that specifies the result of basic operations that are performed on aggregation results.
     *
     * @example success_count
     *
     * @var string
     */
    public $express;
    protected $_name = [
        'alias'   => 'Alias',
        'express' => 'Express',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->express) {
            $res['Express'] = $this->express;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return express
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['Express'])) {
            $model->express = $map['Express'];
        }

        return $model;
    }
}
