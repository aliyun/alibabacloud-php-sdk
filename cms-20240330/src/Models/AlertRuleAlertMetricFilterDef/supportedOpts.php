<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleAlertMetricFilterDef;

use AlibabaCloud\Tea\Model;

class supportedOpts extends Model
{
    /**
     * @var string
     */
    public $displayNameCn;

    /**
     * @var string
     */
    public $displayNameEn;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'displayNameCn' => 'displayNameCn',
        'displayNameEn' => 'displayNameEn',
        'value' => 'value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayNameCn) {
            $res['displayNameCn'] = $this->displayNameCn;
        }
        if (null !== $this->displayNameEn) {
            $res['displayNameEn'] = $this->displayNameEn;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedOpts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['displayNameCn'])) {
            $model->displayNameCn = $map['displayNameCn'];
        }
        if (isset($map['displayNameEn'])) {
            $model->displayNameEn = $map['displayNameEn'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
