<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class CheckServiceLinkedRoleResult extends Model
{
    /**
     * @var bool
     */
    public $existed;
    protected $_name = [
        'existed' => 'existed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->existed) {
            $res['existed'] = $this->existed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckServiceLinkedRoleResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['existed'])) {
            $model->existed = $map['existed'];
        }

        return $model;
    }
}
