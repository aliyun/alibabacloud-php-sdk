<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class ListPolicesForPrivateAccessApplicationRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $applicationIds;
    protected $_name = [
        'applicationIds' => 'ApplicationIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationIds) {
            $res['ApplicationIds'] = $this->applicationIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPolicesForPrivateAccessApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationIds'])) {
            if (!empty($map['ApplicationIds'])) {
                $model->applicationIds = $map['ApplicationIds'];
            }
        }

        return $model;
    }
}
