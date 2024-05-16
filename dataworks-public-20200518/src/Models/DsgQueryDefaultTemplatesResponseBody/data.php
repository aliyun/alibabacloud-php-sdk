<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgQueryDefaultTemplatesResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DataDesensPlanTemplateValue;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example phone
     *
     * @var string
     */
    public $dataType;

    /**
     * @var DataDesensPlanTemplateValue[][]
     */
    public $desensPlanTemplate;
    protected $_name = [
        'dataType'           => 'DataType',
        'desensPlanTemplate' => 'DesensPlanTemplate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->desensPlanTemplate) {
            $res['DesensPlanTemplate'] = $this->desensPlanTemplate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['DesensPlanTemplate'])) {
            $model->desensPlanTemplate = $map['DesensPlanTemplate'];
        }

        return $model;
    }
}
