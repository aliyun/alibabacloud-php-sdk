<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetMigrationNamespacedServicesResponseBody\data\namespacedServices;

use AlibabaCloud\Dara\Model;

class services extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $slbId;
    protected $_name = [
        'name' => 'name',
        'slbId' => 'slbId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->slbId) {
            $res['slbId'] = $this->slbId;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['slbId'])) {
            $model->slbId = $map['slbId'];
        }

        return $model;
    }
}
