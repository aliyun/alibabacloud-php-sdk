<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeModifyPGHbaConfigLogResponseBody\hbaLogItems;

class DescribeModifyPGHbaConfigLogResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var hbaLogItems
     */
    public $hbaLogItems;
    /**
     * @var int
     */
    public $logItemCount;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'hbaLogItems'  => 'HbaLogItems',
        'logItemCount' => 'LogItemCount',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->hbaLogItems) {
            $this->hbaLogItems->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->hbaLogItems) {
            $res['HbaLogItems'] = null !== $this->hbaLogItems ? $this->hbaLogItems->toArray($noStream) : $this->hbaLogItems;
        }

        if (null !== $this->logItemCount) {
            $res['LogItemCount'] = $this->logItemCount;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['HbaLogItems'])) {
            $model->hbaLogItems = hbaLogItems::fromMap($map['HbaLogItems']);
        }

        if (isset($map['LogItemCount'])) {
            $model->logItemCount = $map['LogItemCount'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
