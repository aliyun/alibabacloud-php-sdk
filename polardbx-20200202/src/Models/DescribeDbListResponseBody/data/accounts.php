<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDbListResponseBody\data;

use AlibabaCloud\Tea\Model;

class accounts extends Model
{
    /**
     * @example root4test
     *
     * @var string
     */
    public $accountName;

    /**
     * @example ReadWrite
     *
     * @var string
     */
    public $accountPrivilege;
    protected $_name = [
        'accountName'      => 'AccountName',
        'accountPrivilege' => 'AccountPrivilege',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return accounts
     */
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
