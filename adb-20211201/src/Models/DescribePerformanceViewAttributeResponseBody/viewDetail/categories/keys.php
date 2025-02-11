<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribePerformanceViewAttributeResponseBody\viewDetail\categories;

use AlibabaCloud\Dara\Model;

class keys extends Model
{
    /**
     * @var bool
     */
    public $enableAutoMc;
    /**
     * @var string[]
     */
    public $engine;
    /**
     * @var string[]
     */
    public $groupType;
    /**
     * @var string
     */
    public $keyName;
    /**
     * @var bool
     */
    public $selected;
    protected $_name = [
        'enableAutoMc' => 'EnableAutoMc',
        'engine'       => 'Engine',
        'groupType'    => 'GroupType',
        'keyName'      => 'KeyName',
        'selected'     => 'Selected',
    ];

    public function validate()
    {
        if (\is_array($this->engine)) {
            Model::validateArray($this->engine);
        }
        if (\is_array($this->groupType)) {
            Model::validateArray($this->groupType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableAutoMc) {
            $res['EnableAutoMc'] = $this->enableAutoMc;
        }

        if (null !== $this->engine) {
            if (\is_array($this->engine)) {
                $res['Engine'] = [];
                $n1            = 0;
                foreach ($this->engine as $item1) {
                    $res['Engine'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->groupType) {
            if (\is_array($this->groupType)) {
                $res['GroupType'] = [];
                $n1               = 0;
                foreach ($this->groupType as $item1) {
                    $res['GroupType'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->keyName) {
            $res['KeyName'] = $this->keyName;
        }

        if (null !== $this->selected) {
            $res['Selected'] = $this->selected;
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
        if (isset($map['EnableAutoMc'])) {
            $model->enableAutoMc = $map['EnableAutoMc'];
        }

        if (isset($map['Engine'])) {
            if (!empty($map['Engine'])) {
                $model->engine = [];
                $n1            = 0;
                foreach ($map['Engine'] as $item1) {
                    $model->engine[$n1++] = $item1;
                }
            }
        }

        if (isset($map['GroupType'])) {
            if (!empty($map['GroupType'])) {
                $model->groupType = [];
                $n1               = 0;
                foreach ($map['GroupType'] as $item1) {
                    $model->groupType[$n1++] = $item1;
                }
            }
        }

        if (isset($map['KeyName'])) {
            $model->keyName = $map['KeyName'];
        }

        if (isset($map['Selected'])) {
            $model->selected = $map['Selected'];
        }

        return $model;
    }
}
