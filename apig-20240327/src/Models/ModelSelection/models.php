<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ModelSelection;

use AlibabaCloud\Dara\Model;

class models extends Model
{
    /**
     * @var string
     */
    public $modelCardId;

    /**
     * @var string
     */
    public $serviceId;
    protected $_name = [
        'modelCardId' => 'modelCardId',
        'serviceId' => 'serviceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelCardId) {
            $res['modelCardId'] = $this->modelCardId;
        }

        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
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
        if (isset($map['modelCardId'])) {
            $model->modelCardId = $map['modelCardId'];
        }

        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }

        return $model;
    }
}
