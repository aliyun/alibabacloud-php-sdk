<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDbListResponseBody\data;

use AlibabaCloud\Dara\Model;

class accounts extends Model
{
    /**
     * @var string
     */
    public $accountName;
    /**
     * @var string
     */
    public $accountPrivilege;
    protected $_name = [
        'accountName'      => 'AccountName',
        'accountPrivilege' => 'AccountPrivilege',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        if (null !== $this->accountPrivilege) {
            $res['AccountPrivilege'] = $this->accountPrivilege;
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
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        if (isset($map['AccountPrivilege'])) {
            $model->accountPrivilege = $map['AccountPrivilege'];
        }

        return $model;
    }
}
