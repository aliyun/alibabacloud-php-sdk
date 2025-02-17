<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponseBody\commodity\cssMetadata;

use AlibabaCloud\Dara\Model;

class componentsMappings extends Model
{
    /**
     * @var string[]
     */
    public $mappings;
    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'mappings'     => 'Mappings',
        'templateName' => 'TemplateName',
    ];

    public function validate()
    {
        if (\is_array($this->mappings)) {
            Model::validateArray($this->mappings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mappings) {
            if (\is_array($this->mappings)) {
                $res['Mappings'] = [];
                foreach ($this->mappings as $key1 => $value1) {
                    $res['Mappings'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
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
        if (isset($map['Mappings'])) {
            if (!empty($map['Mappings'])) {
                $model->mappings = [];
                foreach ($map['Mappings'] as $key1 => $value1) {
                    $model->mappings[$key1] = $value1;
                }
            }
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
