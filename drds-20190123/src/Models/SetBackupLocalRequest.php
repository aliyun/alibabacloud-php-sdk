<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class SetBackupLocalRequest extends Model
{
    /**
     * @description The ID of the PolarDB-X 1.0 instance.
     *
     * @example drdshbgag23d13fds
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description Specifies whether to enable the feature to forcibly delete binary log files if the used storage space reaches 90% of the total storage space or the remaining storage space is less than 5 GB. Valid values: 1 and 0. A value of 1 specifies to enable this feature. A value of 0 specifies not to enable this feature.
     *
     * @example 80
     *
     * @var string
     */
    public $highSpaceUsageProtection;

    /**
     * @description The number of hours for which log backup files are retained on the instance. Valid values: 0 to 168. Default value: 18. A value of 0 indicates that log backup files are not retained.
     *
     * @example 12
     *
     * @var string
     */
    public $localLogRetentionHours;

    /**
     * @description The maximum storage space usage that is allowed for log files on the instance. Valid values: 0 to 50. Default value: 30.
     *
     * @example 30
     *
     * @var string
     */
    public $localLogRetentionSpace;
    protected $_name = [
        'drdsInstanceId'           => 'DrdsInstanceId',
        'highSpaceUsageProtection' => 'HighSpaceUsageProtection',
        'localLogRetentionHours'   => 'LocalLogRetentionHours',
        'localLogRetentionSpace'   => 'LocalLogRetentionSpace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->highSpaceUsageProtection) {
            $res['HighSpaceUsageProtection'] = $this->highSpaceUsageProtection;
        }
        if (null !== $this->localLogRetentionHours) {
            $res['LocalLogRetentionHours'] = $this->localLogRetentionHours;
        }
        if (null !== $this->localLogRetentionSpace) {
            $res['LocalLogRetentionSpace'] = $this->localLogRetentionSpace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetBackupLocalRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['HighSpaceUsageProtection'])) {
            $model->highSpaceUsageProtection = $map['HighSpaceUsageProtection'];
        }
        if (isset($map['LocalLogRetentionHours'])) {
            $model->localLogRetentionHours = $map['LocalLogRetentionHours'];
        }
        if (isset($map['LocalLogRetentionSpace'])) {
            $model->localLogRetentionSpace = $map['LocalLogRetentionSpace'];
        }

        return $model;
    }
}
