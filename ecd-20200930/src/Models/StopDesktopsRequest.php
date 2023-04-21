<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class StopDesktopsRequest extends Model
{
    /**
     * @description The IDs of cloud desktops. You can specify up to 20 cloud desktop IDs.
     *
     * @example ecd-7w78ozhjcwa3u****
     *
     * @var string[]
     */
    public $desktopId;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The billing mode after you stop the cloud desktop.
     *
     *   StopCharging: Computing resources are not billed after you stop the cloud desktop. After the cloud desktop is stopped, the system automatically reclaims computing resources. From this point on, you are no longer charged for computing resources. However, you are still charged for storage resources.
     *   KeepCharging: The billing continues after you stop the cloud desktop. After the cloud desktop is stopped, the system does not reclaim resources to avoid startup failures due to insufficient resources. You are still charged for the resources.
     *
     * Default value: StopCharging
     * @example StopCharging
     *
     * @var string
     */
    public $stoppedMode;
    protected $_name = [
        'desktopId'   => 'DesktopId',
        'regionId'    => 'RegionId',
        'stoppedMode' => 'StoppedMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stoppedMode) {
            $res['StoppedMode'] = $this->stoppedMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopDesktopsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopId'])) {
            if (!empty($map['DesktopId'])) {
                $model->desktopId = $map['DesktopId'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StoppedMode'])) {
            $model->stoppedMode = $map['StoppedMode'];
        }

        return $model;
    }
}
