<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetDataAPIServiceDetailResponseBody\data\sqlTemplateDTO\requestParams;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $example;

    /**
     * @var bool
     */
    public $required;
    protected $_name = [
        'name'     => 'Name',
        'type'     => 'Type',
        'desc'     => 'Desc',
        'example'  => 'Example',
        'required' => 'Required',
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->example) {
            $res['Example'] = $this->example;
        }
        if (null !== $this->required) {
            $res['Required'] = $this->required;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['Example'])) {
            $model->example = $map['Example'];
        }
        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }

        return $model;
    }
}
