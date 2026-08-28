<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAttributeResponseBody\memApplicationAttribute;

use AlibabaCloud\Dara\Model;

class sessionStore extends Model
{
    /**
     * @var string
     */
    public $accountMode;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'accountMode' => 'AccountMode',
        'DBClusterId' => 'DBClusterId',
        'DBName' => 'DBName',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountMode) {
            $res['AccountMode'] = $this->accountMode;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
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
        if (isset($map['AccountMode'])) {
            $model->accountMode = $map['AccountMode'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
