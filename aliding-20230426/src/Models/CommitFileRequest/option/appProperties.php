<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CommitFileRequest\option;

use AlibabaCloud\Tea\Model;

class appProperties extends Model
{
    /**
     * @example property_name
     *
     * @var string
     */
    public $name;

    /**
     * @example property_value
     *
     * @var string
     */
    public $value;

    /**
     * @example PUBLIC
     *
     * @var string
     */
    public $visibility;
    protected $_name = [
        'name'       => 'Name',
        'value'      => 'Value',
        'visibility' => 'Visibility',
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
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appProperties
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        return $model;
    }
}
