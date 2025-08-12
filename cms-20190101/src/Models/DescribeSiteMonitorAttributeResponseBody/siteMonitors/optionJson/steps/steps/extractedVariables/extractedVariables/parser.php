<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\steps\steps\extractedVariables\extractedVariables;

use AlibabaCloud\Dara\Model;

class parser extends Model
{
    /**
     * @var string
     */
    public $parserType;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'parserType' => 'parser_type',
        'value' => 'value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parserType) {
            $res['parser_type'] = $this->parserType;
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
        if (isset($map['parser_type'])) {
            $model->parserType = $map['parser_type'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
