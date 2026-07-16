<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeServiceAccountResponseBody\data;

use AlibabaCloud\Dara\Model;

class serviceAccounts extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $serviceAccountType;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'accountName' => 'AccountName',
        'createdTime' => 'CreatedTime',
        'serviceAccountType' => 'ServiceAccountType',
        'status' => 'Status',
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

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->serviceAccountType) {
            $res['ServiceAccountType'] = $this->serviceAccountType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['ServiceAccountType'])) {
            $model->serviceAccountType = $map['ServiceAccountType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
