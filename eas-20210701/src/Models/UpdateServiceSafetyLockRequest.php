<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class UpdateServiceSafetyLockRequest extends Model
{
    /**
     * @description The lock scope. Valid values:
     *
     *   all: locks all operations.
     *   dangerous: locks high-risk operations such as delete and stop operations.
     *   none: locks no operations.
     *
     * @example dangerous
     *
     * @var string
     */
    public $lock;
    protected $_name = [
        'lock' => 'Lock',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lock) {
            $res['Lock'] = $this->lock;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateServiceSafetyLockRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lock'])) {
            $model->lock = $map['Lock'];
        }

        return $model;
    }
}
