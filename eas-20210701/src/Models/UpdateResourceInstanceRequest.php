<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class UpdateResourceInstanceRequest extends Model
{
    /**
     * @example Cordon
     *
     * @var string
     */
    public $action;
    protected $_name = [
        'action' => 'Action',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateResourceInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        return $model;
    }
}
