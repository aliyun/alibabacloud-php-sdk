<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class ModifyAccountDescriptionRequest extends Model
{
    /**
     * @description The name of the member account.
     *
     * @example test
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The description of the account.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the ApsaraDB RDS for PostgreSQL instance.
     *
     * @example drds************
     *
     * @var string
     */
    public $drdsInstanceId;
    protected $_name = [
        'accountName'    => 'AccountName',
        'description'    => 'Description',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAccountDescriptionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }

        return $model;
    }
}
