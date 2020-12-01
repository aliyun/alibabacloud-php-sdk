<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetApplicationResponse\application\delegatedScope\predefinedScopes;

use AlibabaCloud\Tea\Model;

class predefinedScope extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'name'        => 'Name',
        'description' => 'Description',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('description', $this->description, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return predefinedScope
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
