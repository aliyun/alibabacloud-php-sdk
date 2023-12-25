<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeConfigHistoryResponseBody;

use AlibabaCloud\Tea\Model;

class configHistoryItems extends Model
{
    /**
     * @description The ID of the change record.
     *
     * @example 1
     *
     * @var string
     */
    public $changeId;

    /**
     * @description The user ID (UID) of the Alibaba Cloud account.
     *
     * @example 253460731706911258
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description The reason for the setting modification of the configuration parameters.
     *
     * @example test
     *
     * @var string
     */
    public $reason;

    /**
     * @description Indicates whether the setting modification of the configuration parameters took effect. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The time when the values of the configuration parameters were changed. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2022-08-22T10:00:00Z
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'changeId' => 'ChangeId',
        'ownerId'  => 'OwnerId',
        'reason'   => 'Reason',
        'success'  => 'Success',
        'time'     => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeId) {
            $res['ChangeId'] = $this->changeId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configHistoryItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeId'])) {
            $model->changeId = $map['ChangeId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
