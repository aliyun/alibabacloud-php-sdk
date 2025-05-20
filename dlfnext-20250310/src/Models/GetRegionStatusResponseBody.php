<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class GetRegionStatusResponseBody extends Model
{
    /**
     * @var bool
     */
    public $serviceRoleExists;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'serviceRoleExists' => 'serviceRoleExists',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serviceRoleExists) {
            $res['serviceRoleExists'] = $this->serviceRoleExists;
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
        if (isset($map['serviceRoleExists'])) {
            $model->serviceRoleExists = $map['serviceRoleExists'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
