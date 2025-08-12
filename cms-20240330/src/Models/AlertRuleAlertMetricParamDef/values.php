<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleAlertMetricParamDef;

use AlibabaCloud\Dara\Model;

class values extends Model
{
    /**
     * @var string
     */
    public $labelCn;

    /**
     * @var string
     */
    public $labelEn;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'labelCn' => 'labelCn',
        'labelEn' => 'labelEn',
        'value' => 'value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labelCn) {
            $res['labelCn'] = $this->labelCn;
        }

        if (null !== $this->labelEn) {
            $res['labelEn'] = $this->labelEn;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['labelCn'])) {
            $model->labelCn = $map['labelCn'];
        }

        if (isset($map['labelEn'])) {
            $model->labelEn = $map['labelEn'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
