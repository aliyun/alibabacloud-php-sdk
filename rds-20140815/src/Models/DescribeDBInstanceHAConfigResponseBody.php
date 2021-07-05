<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceHAConfigResponseBody\hostInstanceInfos;
use AlibabaCloud\Tea\Model;

class DescribeDBInstanceHAConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $HAMode;

    /**
     * @var string
     */
    public $syncMode;

    /**
     * @var hostInstanceInfos
     */
    public $hostInstanceInfos;
    protected $_name = [
        'DBInstanceId'      => 'DBInstanceId',
        'requestId'         => 'RequestId',
        'HAMode'            => 'HAMode',
        'syncMode'          => 'SyncMode',
        'hostInstanceInfos' => 'HostInstanceInfos',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->HAMode) {
            $res['HAMode'] = $this->HAMode;
        }
        if (null !== $this->syncMode) {
            $res['SyncMode'] = $this->syncMode;
        }
        if (null !== $this->hostInstanceInfos) {
            $res['HostInstanceInfos'] = null !== $this->hostInstanceInfos ? $this->hostInstanceInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceHAConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HAMode'])) {
            $model->HAMode = $map['HAMode'];
        }
        if (isset($map['SyncMode'])) {
            $model->syncMode = $map['SyncMode'];
        }
        if (isset($map['HostInstanceInfos'])) {
            $model->hostInstanceInfos = hostInstanceInfos::fromMap($map['HostInstanceInfos']);
        }

        return $model;
    }
}
