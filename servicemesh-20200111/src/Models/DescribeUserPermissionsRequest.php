<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;

class DescribeUserPermissionsRequest extends Model
{
    /**
     * @var string
     */
    public $subAccountUserId;
    protected $_name = [
        'subAccountUserId' => 'SubAccountUserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subAccountUserId) {
            $res['SubAccountUserId'] = $this->subAccountUserId;
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
        if (isset($map['SubAccountUserId'])) {
            $model->subAccountUserId = $map['SubAccountUserId'];
        }

        return $model;
    }
}
