<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class DataDesensPlanTemplateValue extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $supportWaterMark;

    /**
     * @var mixed[]
     */
    public $extParamTemplate;
    protected $_name = [
        'name' => 'Name',
        'supportWaterMark' => 'SupportWaterMark',
        'extParamTemplate' => 'ExtParamTemplate',
    ];

    public function validate()
    {
        if (\is_array($this->extParamTemplate)) {
            Model::validateArray($this->extParamTemplate);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->supportWaterMark) {
            $res['SupportWaterMark'] = $this->supportWaterMark;
        }

        if (null !== $this->extParamTemplate) {
            if (\is_array($this->extParamTemplate)) {
                $res['ExtParamTemplate'] = [];
                $n1 = 0;
                foreach ($this->extParamTemplate as $item1) {
                    $res['ExtParamTemplate'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SupportWaterMark'])) {
            $model->supportWaterMark = $map['SupportWaterMark'];
        }

        if (isset($map['ExtParamTemplate'])) {
            if (!empty($map['ExtParamTemplate'])) {
                $model->extParamTemplate = [];
                $n1 = 0;
                foreach ($map['ExtParamTemplate'] as $item1) {
                    $model->extParamTemplate[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
