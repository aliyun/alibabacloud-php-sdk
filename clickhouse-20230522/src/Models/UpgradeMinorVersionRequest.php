<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models;

use AlibabaCloud\Tea\Model;

class UpgradeMinorVersionRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     *
     * @example cc-bp1jyis8p15we****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The update time. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * >  If you set SwitchTimeMode to SpecifyTime, you must configure this parameter to specify the update time.
     *
     * @example 2023-01-09T05:00:00Z
     *
     * @var string
     */
    public $switchTime;

    /**
     * @description Specifies whether to update the minor engine version of the cluster immediately. Valid values:
     *
     *   **Immediate**: The system immediately performs the update.
     *   **MaintainTime**: The system performs the update during the specified maintenance window.
     *   **SpecifyTime**: The system performs the update at a specified time.
     *
     * @example Immediate
     *
     * @var string
     */
    public $switchTimeMode;

    /**
     * @description The minor engine version to which you want to update.
     *
     * >  By default, TargetMinorVersion is not set and the minor engine version of the cluster is updated to the latest version.
     *
     * @example 23.8.1.41495_6
     *
     * @var string
     */
    public $targetMinorVersion;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'regionId' => 'RegionId',
        'switchTime' => 'SwitchTime',
        'switchTimeMode' => 'SwitchTimeMode',
        'targetMinorVersion' => 'TargetMinorVersion',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->switchTime) {
            $res['SwitchTime'] = $this->switchTime;
        }
        if (null !== $this->switchTimeMode) {
            $res['SwitchTimeMode'] = $this->switchTimeMode;
        }
        if (null !== $this->targetMinorVersion) {
            $res['TargetMinorVersion'] = $this->targetMinorVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeMinorVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SwitchTime'])) {
            $model->switchTime = $map['SwitchTime'];
        }
        if (isset($map['SwitchTimeMode'])) {
            $model->switchTimeMode = $map['SwitchTimeMode'];
        }
        if (isset($map['TargetMinorVersion'])) {
            $model->targetMinorVersion = $map['TargetMinorVersion'];
        }

        return $model;
    }
}
