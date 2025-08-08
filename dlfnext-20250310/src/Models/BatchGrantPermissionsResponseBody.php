<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class BatchGrantPermissionsResponseBody extends Model
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
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorMessage' => 'errorMessage',
        'failurePermissions' => 'failurePermissions',
        'success' => 'success',
    ];

    public function validate()
    {
        if (\is_array($this->failurePermissions)) {
            Model::validateArray($this->failurePermissions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->failurePermissions) {
            if (\is_array($this->failurePermissions)) {
                $res['failurePermissions'] = [];
                $n1 = 0;
                foreach ($this->failurePermissions as $item1) {
                    $res['failurePermissions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
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
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['failurePermissions'])) {
            if (!empty($map['failurePermissions'])) {
                $model->failurePermissions = [];
                $n1 = 0;
                foreach ($map['failurePermissions'] as $item1) {
                    $model->failurePermissions[$n1] = FailurePermission::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
