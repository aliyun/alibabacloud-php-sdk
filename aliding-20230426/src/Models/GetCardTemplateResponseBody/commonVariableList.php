<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetCardTemplateResponseBody;

use AlibabaCloud\Dara\Model;

class commonVariableList extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $ifPrivateFiled;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'description' => 'Description',
        'id' => 'Id',
        'ifPrivateFiled' => 'IfPrivateFiled',
        'name' => 'Name',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->ifPrivateFiled) {
            $res['IfPrivateFiled'] = $this->ifPrivateFiled;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IfPrivateFiled'])) {
            $model->ifPrivateFiled = $map['IfPrivateFiled'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
