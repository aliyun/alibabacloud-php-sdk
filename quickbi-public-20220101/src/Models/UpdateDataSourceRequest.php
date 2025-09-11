<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class UpdateDataSourceRequest extends Model
{
    /**
     * @var string
     */
    public $updateModel;
    protected $_name = [
        'updateModel' => 'UpdateModel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->updateModel) {
            $res['UpdateModel'] = $this->updateModel;
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
        if (isset($map['UpdateModel'])) {
            $model->updateModel = $map['UpdateModel'];
        }

        return $model;
    }
}
