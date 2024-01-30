<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsyaochiportal\V20230206\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserAuthRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $grantState;
    protected $_name = [
        'grantState' => 'GrantState',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->grantState) {
            $res['GrantState'] = $this->grantState;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUserAuthRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GrantState'])) {
            $model->grantState = $map['GrantState'];
        }

        return $model;
    }
}
