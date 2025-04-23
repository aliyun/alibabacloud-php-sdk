<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;

class GetProjectBuildContextRequest extends Model
{
    /**
     * @var bool
     */
    public $isPassAssertCheck;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'isPassAssertCheck' => 'isPassAssertCheck',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isPassAssertCheck) {
            $res['isPassAssertCheck'] = $this->isPassAssertCheck;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['isPassAssertCheck'])) {
            $model->isPassAssertCheck = $map['isPassAssertCheck'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
