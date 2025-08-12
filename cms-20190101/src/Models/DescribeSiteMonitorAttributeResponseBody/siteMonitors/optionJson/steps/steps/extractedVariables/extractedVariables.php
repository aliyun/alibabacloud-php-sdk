<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\steps\steps\extractedVariables;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\steps\steps\extractedVariables\extractedVariables\parser;

class extractedVariables extends Model
{
    /**
     * @var string
     */
    public $extractedType;

    /**
     * @var string
     */
    public $field;

    /**
     * @var string
     */
    public $name;

    /**
     * @var parser
     */
    public $parser;
    protected $_name = [
        'extractedType' => 'extracted_type',
        'field' => 'field',
        'name' => 'name',
        'parser' => 'parser',
    ];

    public function validate()
    {
        if (null !== $this->parser) {
            $this->parser->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extractedType) {
            $res['extracted_type'] = $this->extractedType;
        }

        if (null !== $this->field) {
            $res['field'] = $this->field;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->parser) {
            $res['parser'] = null !== $this->parser ? $this->parser->toArray($noStream) : $this->parser;
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
        if (isset($map['extracted_type'])) {
            $model->extractedType = $map['extracted_type'];
        }

        if (isset($map['field'])) {
            $model->field = $map['field'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['parser'])) {
            $model->parser = parser::fromMap($map['parser']);
        }

        return $model;
    }
}
