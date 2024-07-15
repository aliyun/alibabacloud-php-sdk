<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\commodity\cssMetadata;

use AlibabaCloud\Tea\Model;

class componentsMappings extends Model
{
    /**
     * @description The mappings.
     *
     * @var string[]
     */
    public $mappings;

    /**
     * @description The template name.
     *
     * @example Template 1
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'mappings'     => 'Mappings',
        'templateName' => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mappings) {
            $res['Mappings'] = $this->mappings;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return componentsMappings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mappings'])) {
            $model->mappings = $map['Mappings'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
