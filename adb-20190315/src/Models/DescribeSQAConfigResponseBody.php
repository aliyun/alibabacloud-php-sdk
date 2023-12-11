<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeSQAConfigResponseBody extends Model
{
    /**
     * @example am-8vbyw9awuj141haf9
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example test_group
     *
     * @var string
     */
    public $groupName;

    /**
     * @example CBE843D8-964D-5EA3-9D31-822125611B6E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example off
     *
     * @var string
     */
    public $SQAStatus;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'groupName'   => 'GroupName',
        'requestId'   => 'RequestId',
        'SQAStatus'   => 'SQAStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->SQAStatus) {
            $res['SQAStatus'] = $this->SQAStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSQAConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SQAStatus'])) {
            $model->SQAStatus = $map['SQAStatus'];
        }

        return $model;
    }
}
