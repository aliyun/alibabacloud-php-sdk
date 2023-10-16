<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class RecordBankBalanceRequest extends Model
{
    /**
     * @var int
     */
    public $actionDate;

    /**
     * @var string
     */
    public $balance;

    /**
     * @var string
     */
    public $principalName;
    protected $_name = [
        'actionDate'    => 'ActionDate',
        'balance'       => 'Balance',
        'principalName' => 'PrincipalName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionDate) {
            $res['ActionDate'] = $this->actionDate;
        }
        if (null !== $this->balance) {
            $res['Balance'] = $this->balance;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecordBankBalanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionDate'])) {
            $model->actionDate = $map['ActionDate'];
        }
        if (isset($map['Balance'])) {
            $model->balance = $map['Balance'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }

        return $model;
    }
}
