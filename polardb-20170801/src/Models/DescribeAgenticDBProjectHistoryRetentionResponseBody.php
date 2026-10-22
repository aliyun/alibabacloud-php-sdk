<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DescribeAgenticDBProjectHistoryRetentionResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var int
     */
    public $historyRetentionSeconds;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $queriedAt;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'historyRetentionSeconds' => 'HistoryRetentionSeconds',
        'projectId' => 'ProjectId',
        'queriedAt' => 'QueriedAt',
        'requestId' => 'RequestId',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->historyRetentionSeconds) {
            $res['HistoryRetentionSeconds'] = $this->historyRetentionSeconds;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->queriedAt) {
            $res['QueriedAt'] = $this->queriedAt;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['HistoryRetentionSeconds'])) {
            $model->historyRetentionSeconds = $map['HistoryRetentionSeconds'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['QueriedAt'])) {
            $model->queriedAt = $map['QueriedAt'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
