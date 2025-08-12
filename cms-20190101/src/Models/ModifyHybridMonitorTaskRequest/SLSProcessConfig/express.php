<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHybridMonitorTaskRequest\SLSProcessConfig;

use AlibabaCloud\Dara\Model;

class express extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $express;
    protected $_name = [
        'alias' => 'Alias',
        'express' => 'Express',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (isset($map['Express'])) {
            $model->express = $map['Express'];
        }

        return $model;
    }
}
