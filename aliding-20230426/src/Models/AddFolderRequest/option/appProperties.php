<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\AddFolderRequest\option;

use AlibabaCloud\Dara\Model;

class appProperties extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $visibility;
    protected $_name = [
        'name' => 'Name',
        'value' => 'Value',
        'visibility' => 'Visibility',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        return $model;
    }
}
