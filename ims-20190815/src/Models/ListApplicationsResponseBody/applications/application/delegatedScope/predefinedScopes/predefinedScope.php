<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListApplicationsResponseBody\applications\application\delegatedScope\predefinedScopes;

use AlibabaCloud\Dara\Model;

class predefinedScope extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $name;
    /**
     * @var bool
     */
    public $required;
    protected $_name = [
        'description' => 'Description',
        'name'        => 'Name',
        'required'    => 'Required',
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

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->required) {
            $res['Required'] = $this->required;
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

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }

        return $model;
    }
}
