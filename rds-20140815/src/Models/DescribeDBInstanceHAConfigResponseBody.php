<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceHAConfigResponseBody\hostInstanceInfos;

class DescribeDBInstanceHAConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var string
     */
    public $HAMode;
    /**
     * @var hostInstanceInfos
     */
    public $hostInstanceInfos;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $syncMode;
    protected $_name = [
        'DBInstanceId'      => 'DBInstanceId',
        'HAMode'            => 'HAMode',
        'hostInstanceInfos' => 'HostInstanceInfos',
        'requestId'         => 'RequestId',
        'syncMode'          => 'SyncMode',
    ];

    public function validate()
    {
        if (null !== $this->hostInstanceInfos) {
            $this->hostInstanceInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->HAMode) {
            $res['HAMode'] = $this->HAMode;
        }

        if (null !== $this->hostInstanceInfos) {
            $res['HostInstanceInfos'] = null !== $this->hostInstanceInfos ? $this->hostInstanceInfos->toArray($noStream) : $this->hostInstanceInfos;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->syncMode) {
            $res['SyncMode'] = $this->syncMode;
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

        if (isset($map['HAMode'])) {
            $model->HAMode = $map['HAMode'];
        }

        if (isset($map['HostInstanceInfos'])) {
            $model->hostInstanceInfos = hostInstanceInfos::fromMap($map['HostInstanceInfos']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SyncMode'])) {
            $model->syncMode = $map['SyncMode'];
        }

        return $model;
    }
}
