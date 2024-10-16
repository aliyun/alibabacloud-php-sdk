<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribePerformanceViewAttributeResponseBody\viewDetail\categories;

use AlibabaCloud\Tea\Model;

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
     * @description The name of the metric.
     *
     * @example AnalyticDB_CPU
     *
     * @var string
     */
    public $keyName;

    /**
     * @description Specifies whether to select the metric. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableAutoMc) {
            $res['EnableAutoMc'] = $this->enableAutoMc;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->keyName) {
            $res['KeyName'] = $this->keyName;
        }
        if (null !== $this->selected) {
            $res['Selected'] = $this->selected;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableAutoMc'])) {
            $model->enableAutoMc = $map['EnableAutoMc'];
        }
        if (isset($map['Engine'])) {
            if (!empty($map['Engine'])) {
                $model->engine = $map['Engine'];
            }
        }
        if (isset($map['GroupType'])) {
            if (!empty($map['GroupType'])) {
                $model->groupType = $map['GroupType'];
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
