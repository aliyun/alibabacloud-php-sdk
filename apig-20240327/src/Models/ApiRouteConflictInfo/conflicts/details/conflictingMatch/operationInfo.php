<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ApiRouteConflictInfo\conflicts\details\conflictingMatch;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return operationInfo
     */
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
