<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class ModifyBackupPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $preferredBackupTime;

    /**
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @var string
     */
    public $preferredBackupStartTimeUTC;

    /**
     * @var string
     */
    public $preferredBackupEndTimeUTC;
    protected $_name = [
        'clusterId'                   => 'ClusterId',
        'preferredBackupTime'         => 'PreferredBackupTime',
        'preferredBackupPeriod'       => 'PreferredBackupPeriod',
        'preferredBackupStartTimeUTC' => 'PreferredBackupStartTimeUTC',
        'preferredBackupEndTimeUTC'   => 'PreferredBackupEndTimeUTC',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->preferredBackupTime) {
            $res['PreferredBackupTime'] = $this->preferredBackupTime;
        }
        if (null !== $this->preferredBackupPeriod) {
            $res['PreferredBackupPeriod'] = $this->preferredBackupPeriod;
        }
        if (null !== $this->preferredBackupStartTimeUTC) {
            $res['PreferredBackupStartTimeUTC'] = $this->preferredBackupStartTimeUTC;
        }
        if (null !== $this->preferredBackupEndTimeUTC) {
            $res['PreferredBackupEndTimeUTC'] = $this->preferredBackupEndTimeUTC;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyBackupPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['PreferredBackupTime'])) {
            $model->preferredBackupTime = $map['PreferredBackupTime'];
        }
        if (isset($map['PreferredBackupPeriod'])) {
            $model->preferredBackupPeriod = $map['PreferredBackupPeriod'];
        }
        if (isset($map['PreferredBackupStartTimeUTC'])) {
            $model->preferredBackupStartTimeUTC = $map['PreferredBackupStartTimeUTC'];
        }
        if (isset($map['PreferredBackupEndTimeUTC'])) {
            $model->preferredBackupEndTimeUTC = $map['PreferredBackupEndTimeUTC'];
        }

        return $model;
    }
}
