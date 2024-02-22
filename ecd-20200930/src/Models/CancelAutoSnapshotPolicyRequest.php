<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CancelAutoSnapshotPolicyRequest extends Model
{
    /**
     * @description The IDs of the cloud desktops. Valid values of N: 1 to 50. You cannot leave this parameter empty. The value can be up to 64 characters in length and cannot start with acs: or aliyun. It cannot contain `http://` or `https://`.
     *
     * @var string[]
     */
    public $desktopId;

    /**
     * @description The ID of the automatic snapshot policy.
     *
     * @example sp-78lhzpe7kjfnd****
     *
     * @var string
     */
    public $policyId;

    /**
     * @description The region ID of the automatic snapshot policy. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'desktopId' => 'DesktopId',
        'policyId'  => 'PolicyId',
        'regionId'  => 'RegionId',
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
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelAutoSnapshotPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopId'])) {
            if (!empty($map['DesktopId'])) {
                $model->desktopId = $map['DesktopId'];
            }
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
