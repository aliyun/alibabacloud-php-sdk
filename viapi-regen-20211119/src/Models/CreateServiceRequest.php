<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceRequest extends Model
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
     * @var int
     */
    public $trainTaskId;
    protected $_name = [
        'description' => 'Description',
        'name'        => 'Name',
        'trainTaskId' => 'TrainTaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->trainTaskId) {
            $res['TrainTaskId'] = $this->trainTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TrainTaskId'])) {
            $model->trainTaskId = $map['TrainTaskId'];
        }

        return $model;
    }
}
