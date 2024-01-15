<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyDesktopNameRequest extends Model
{
    /**
     * @description The cloud computer ID.
     *
     * @example ecd-gx2x1dhsmucyy****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The new name of the cloud desktop. The name of the cloud desktop must meet the following requirements:
     *
     *   The name must be 1 to 64 characters in length.
     *   The name must start with a letter but cannot start with `http://` or `https://`.
     *   It can contain letters, digits, colons (:), underscores (\_), periods (.), and hyphens (-).
     *
     * @example test
     *
     * @var string
     */
    public $newDesktopName;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'desktopId'      => 'DesktopId',
        'newDesktopName' => 'NewDesktopName',
        'regionId'       => 'RegionId',
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
        if (null !== $this->newDesktopName) {
            $res['NewDesktopName'] = $this->newDesktopName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDesktopNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['NewDesktopName'])) {
            $model->newDesktopName = $map['NewDesktopName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
