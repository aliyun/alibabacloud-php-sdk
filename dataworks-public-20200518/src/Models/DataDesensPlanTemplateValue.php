<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DataDesensPlanTemplateValue extends Model
{
    /**
     * @example hash
     *
     * @var string
     */
    public $name;

    /**
     * @example true
     *
     * @var bool
     */
    public $supportWaterMark;

    /**
     * @var mixed[]
     */
    public $extParamTemplate;
    protected $_name = [
        'name'             => 'Name',
        'supportWaterMark' => 'SupportWaterMark',
        'extParamTemplate' => 'ExtParamTemplate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->supportWaterMark) {
            $res['SupportWaterMark'] = $this->supportWaterMark;
        }
        if (null !== $this->extParamTemplate) {
            $res['ExtParamTemplate'] = $this->extParamTemplate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataDesensPlanTemplateValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SupportWaterMark'])) {
            $model->supportWaterMark = $map['SupportWaterMark'];
        }
        if (isset($map['ExtParamTemplate'])) {
            if (!empty($map['ExtParamTemplate'])) {
                $model->extParamTemplate = $map['ExtParamTemplate'];
            }
        }

        return $model;
    }
}
