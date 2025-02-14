<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ApiRouteConflictInfo\conflicts\details\detectedMatch;

use AlibabaCloud\Dara\Model;

class operationInfo extends Model
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $operationId;
    protected $_name = [
        'name'        => 'name',
        'operationId' => 'operationId',
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

        if (null !== $this->operationId) {
            $res['operationId'] = $this->operationId;
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

        if (isset($map['operationId'])) {
            $model->operationId = $map['operationId'];
        }

        return $model;
    }
}
