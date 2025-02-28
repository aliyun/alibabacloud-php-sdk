<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class DescribeHistoryEventsStatRequest extends Model
{
    /**
     * @var string
     */
    public $archiveStatus;
    /**
     * @var string
     */
    public $fromStartTime;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $securityToken;
    /**
     * @var string
     */
    public $toStartTime;
    protected $_name = [
        'archiveStatus' => 'ArchiveStatus',
        'fromStartTime' => 'FromStartTime',
        'regionId'      => 'RegionId',
        'securityToken' => 'SecurityToken',
        'toStartTime'   => 'ToStartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->archiveStatus) {
            $res['ArchiveStatus'] = $this->archiveStatus;
        }

        if (null !== $this->fromStartTime) {
            $res['FromStartTime'] = $this->fromStartTime;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->toStartTime) {
            $res['ToStartTime'] = $this->toStartTime;
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
        if (isset($map['ArchiveStatus'])) {
            $model->archiveStatus = $map['ArchiveStatus'];
        }

        if (isset($map['FromStartTime'])) {
            $model->fromStartTime = $map['FromStartTime'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['ToStartTime'])) {
            $model->toStartTime = $map['ToStartTime'];
        }

        return $model;
    }
}
