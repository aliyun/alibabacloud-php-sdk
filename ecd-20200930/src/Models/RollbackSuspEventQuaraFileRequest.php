<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class RollbackSuspEventQuaraFileRequest extends Model
{
    /**
     * @description The ID of the cloud desktop.
     *
     * @example ecd-138dsptkrt00u****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The ID of the quarantined file.
     *
     * You can call the [DescribeSuspEventQuaraFiles](~~217947~~) operation to obtain the ID of the quarantined file.
     * @example 3921797
     *
     * @var int
     */
    public $quaraFieldId;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'desktopId'    => 'DesktopId',
        'quaraFieldId' => 'QuaraFieldId',
        'regionId'     => 'RegionId',
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
        if (null !== $this->quaraFieldId) {
            $res['QuaraFieldId'] = $this->quaraFieldId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RollbackSuspEventQuaraFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['QuaraFieldId'])) {
            $model->quaraFieldId = $map['QuaraFieldId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
