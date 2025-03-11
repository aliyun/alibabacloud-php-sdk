<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class RemoveInstanceAccountRequest extends Model
{
    /**
     * @description The name of the member account.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The ID of the DRDS instance.
     *
     * This parameter is required.
     * @example drds***********
     *
     * @var string
     */
    public $drdsInstanceId;
    protected $_name = [
        'accountName'    => 'AccountName',
        'drdsInstanceId' => 'DrdsInstanceId',
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
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveInstanceAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }

        return $model;
    }
}
