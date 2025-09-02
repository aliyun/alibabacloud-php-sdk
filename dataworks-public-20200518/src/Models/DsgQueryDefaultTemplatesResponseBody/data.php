<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgQueryDefaultTemplatesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DataDesensPlanTemplateValue;

class data extends Model
{
    /**
     * @var string
     */
    public $dataType;

    /**
     * @var DataDesensPlanTemplateValue[][]
     */
    public $desensPlanTemplate;
    protected $_name = [
        'dataType' => 'DataType',
        'desensPlanTemplate' => 'DesensPlanTemplate',
    ];

    public function validate()
    {
        if (\is_array($this->desensPlanTemplate)) {
            Model::validateArray($this->desensPlanTemplate);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->desensPlanTemplate) {
            if (\is_array($this->desensPlanTemplate)) {
                $res['DesensPlanTemplate'] = [];
                foreach ($this->desensPlanTemplate as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['DesensPlanTemplate'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['DesensPlanTemplate'][$key1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
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
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['DesensPlanTemplate'])) {
            if (!empty($map['DesensPlanTemplate'])) {
                $model->desensPlanTemplate = [];
                foreach ($map['DesensPlanTemplate'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->desensPlanTemplate[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->desensPlanTemplate[$key1][$n2] = DataDesensPlanTemplateValue::fromMap($item2);
                            ++$n2;
                        }
                    }
                }
            }
        }

        return $model;
    }
}
