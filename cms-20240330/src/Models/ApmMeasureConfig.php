<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ApmMeasureConfig extends Model
{
    /**
     * @var string[]
     */
    public $groupBy;

    /**
     * @var string
     */
    public $measureCode;

    /**
     * @var int
     */
    public $windowSecs;
    protected $_name = [
        'groupBy' => 'groupBy',
        'measureCode' => 'measureCode',
        'windowSecs' => 'windowSecs',
    ];

    public function validate()
    {
        if (\is_array($this->groupBy)) {
            Model::validateArray($this->groupBy);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupBy) {
            if (\is_array($this->groupBy)) {
                $res['groupBy'] = [];
                $n1 = 0;
                foreach ($this->groupBy as $item1) {
                    $res['groupBy'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->measureCode) {
            $res['measureCode'] = $this->measureCode;
        }

        if (null !== $this->windowSecs) {
            $res['windowSecs'] = $this->windowSecs;
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
        if (isset($map['groupBy'])) {
            if (!empty($map['groupBy'])) {
                $model->groupBy = [];
                $n1 = 0;
                foreach ($map['groupBy'] as $item1) {
                    $model->groupBy[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['measureCode'])) {
            $model->measureCode = $map['measureCode'];
        }

        if (isset($map['windowSecs'])) {
            $model->windowSecs = $map['windowSecs'];
        }

        return $model;
    }
}
