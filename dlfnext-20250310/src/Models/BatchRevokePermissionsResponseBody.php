<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class BatchRevokePermissionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var FailurePermission[]
     */
    public $failurePermissions;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorMessage' => 'errorMessage',
        'failurePermissions' => 'failurePermissions',
        'success' => 'success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->failurePermissions) {
            $res['failurePermissions'] = [];
            if (null !== $this->failurePermissions && \is_array($this->failurePermissions)) {
                $n = 0;
                foreach ($this->failurePermissions as $item) {
                    $res['failurePermissions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchRevokePermissionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }
        if (isset($map['failurePermissions'])) {
            if (!empty($map['failurePermissions'])) {
                $model->failurePermissions = [];
                $n = 0;
                foreach ($map['failurePermissions'] as $item) {
                    $model->failurePermissions[$n++] = null !== $item ? FailurePermission::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
