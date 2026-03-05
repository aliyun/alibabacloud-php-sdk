<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class CreateAppTokenServiceRequest extends Model
{
    /**
     * @var string
     */
    public $createAction;
    protected $_name = [
        'createAction' => 'CreateAction',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createAction) {
            $res['CreateAction'] = $this->createAction;
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
        if (isset($map['CreateAction'])) {
            $model->createAction = $map['CreateAction'];
        }

        return $model;
    }
}
