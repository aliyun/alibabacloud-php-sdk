<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class ModifyAccountPasswordRequest extends Model
{
    /**
     * @example test01
     *
     * @var string
     */
    public $accountName;

    /**
     * @example ld-bp150tns0sjxs****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example **********
     *
     * @var string
     */
    public $newAccountPassword;
    protected $_name = [
        'accountName'        => 'AccountName',
        'clusterId'          => 'ClusterId',
        'newAccountPassword' => 'NewAccountPassword',
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
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->newAccountPassword) {
            $res['NewAccountPassword'] = $this->newAccountPassword;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAccountPasswordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['NewAccountPassword'])) {
            $model->newAccountPassword = $map['NewAccountPassword'];
        }

        return $model;
    }
}
