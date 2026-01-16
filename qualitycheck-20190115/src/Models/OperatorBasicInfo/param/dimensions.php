<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\OperatorBasicInfo\param;

use AlibabaCloud\Dara\Model;

class dimensions extends Model
{
    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $dimension;

    /**
     * @var string
     */
    public $excludeCondition;

    /**
     * @var string
     */
    public $includeCondition;
    protected $_name = [
        'desc' => 'Desc',
        'dimension' => 'Dimension',
        'excludeCondition' => 'ExcludeCondition',
        'includeCondition' => 'IncludeCondition',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }

        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }

        if (null !== $this->excludeCondition) {
            $res['ExcludeCondition'] = $this->excludeCondition;
        }

        if (null !== $this->includeCondition) {
            $res['IncludeCondition'] = $this->includeCondition;
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
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
        }

        if (isset($map['ExcludeCondition'])) {
            $model->excludeCondition = $map['ExcludeCondition'];
        }

        if (isset($map['IncludeCondition'])) {
            $model->includeCondition = $map['IncludeCondition'];
        }

        return $model;
    }
}
