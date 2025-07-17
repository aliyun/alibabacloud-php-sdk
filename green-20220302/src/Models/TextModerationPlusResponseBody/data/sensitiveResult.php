<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponseBody\data;

use AlibabaCloud\Tea\Model;

class sensitiveResult extends Model
{
    /**
     * @description Description
     *
     * @example xxx
     *
     * @var string
     */
    public $description;

    /**
     * @description The label
     *
     * @example 1234
     *
     * @var string
     */
    public $label;

    /**
     * @description The sensitive data.
     *
     * @var string[]
     */
    public $sensitiveData;

    /**
     * @description The level of sensitivity data
     *
     * @example S1
     *
     * @var string
     */
    public $sensitiveLevel;
    protected $_name = [
        'description' => 'Description',
        'label' => 'Label',
        'sensitiveData' => 'SensitiveData',
        'sensitiveLevel' => 'SensitiveLevel',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->sensitiveData) {
            $res['SensitiveData'] = $this->sensitiveData;
        }
        if (null !== $this->sensitiveLevel) {
            $res['SensitiveLevel'] = $this->sensitiveLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sensitiveResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['SensitiveData'])) {
            if (!empty($map['SensitiveData'])) {
                $model->sensitiveData = $map['SensitiveData'];
            }
        }
        if (isset($map['SensitiveLevel'])) {
            $model->sensitiveLevel = $map['SensitiveLevel'];
        }

        return $model;
    }
}
