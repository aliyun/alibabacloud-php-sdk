<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateTableRequest;

use AlibabaCloud\Dara\Model;

class renameColumn extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $newName;
    protected $_name = [
        'name' => 'Name',
        'newName' => 'NewName',
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

        if (null !== $this->newName) {
            $res['NewName'] = $this->newName;
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

        if (isset($map['NewName'])) {
            $model->newName = $map['NewName'];
        }

        return $model;
    }
}
