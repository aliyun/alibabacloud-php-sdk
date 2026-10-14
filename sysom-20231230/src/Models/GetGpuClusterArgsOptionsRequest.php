<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class GetGpuClusterArgsOptionsRequest extends Model
{
    /**
     * @var string
     */
    public $filterType;

    /**
     * @var mixed
     */
    public $filterValues;
    protected $_name = [
        'filterType' => 'filterType',
        'filterValues' => 'filterValues',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filterType) {
            $res['filterType'] = $this->filterType;
        }

        if (null !== $this->filterValues) {
            $res['filterValues'] = $this->filterValues;
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
        if (isset($map['filterType'])) {
            $model->filterType = $map['filterType'];
        }

        if (isset($map['filterValues'])) {
            $model->filterValues = $map['filterValues'];
        }

        return $model;
    }
}
