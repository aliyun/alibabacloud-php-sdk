<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateConfigTemplateRequest extends Model
{
    /**
     * @description The content of the configuration template. The value must be in the format that is specified by the Format parameter.
     *
     * @example {"name":"william","age":18}
     *
     * @var string
     */
    public $content;

    /**
     * @description The description of the configuration template. The description can be up to 255 characters in length.
     *
     * @example Test configuration template
     *
     * @var string
     */
    public $description;

    /**
     * @description The data format of the configuration template. Valid values:
     *
     *   JSON: JSON format
     *   XML: XML format
     *   YAML: YAML format
     *   Properties: .properties format
     *   KeyValue: key-value pairs
     *   Custom: custom format
     *
     * @example JSON
     *
     * @var string
     */
    public $format;

    /**
     * @description The ID of the configuration template.
     *
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the configuration template. The name can be up to 64 characters in length.
     *
     * @example configtmpl1
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'content'     => 'Content',
        'description' => 'Description',
        'format'      => 'Format',
        'id'          => 'Id',
        'name'        => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateConfigTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
