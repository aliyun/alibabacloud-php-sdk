<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeModifyPGHbaConfigLogResponseBody\hbaLogItems;
use AlibabaCloud\Tea\Model;

class DescribeModifyPGHbaConfigLogResponseBody extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example pgm-bp1lymyn1v3i****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description An array that consists of the modifications to the pg_hba.conf file.
     *
     * @var hbaLogItems
     */
    public $hbaLogItems;

    /**
     * @description The number of modification records.
     *
     * @example 1
     *
     * @var int
     */
    public $logItemCount;

    /**
     * @description The ID of the request.
     *
     * @example 6D797E6B-E157-510C-A27F-6F9E6DA40633
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->hbaLogItems) {
            $res['HbaLogItems'] = null !== $this->hbaLogItems ? $this->hbaLogItems->toMap() : null;
        }
        if (null !== $this->logItemCount) {
            $res['LogItemCount'] = $this->logItemCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeModifyPGHbaConfigLogResponseBody
     */
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
