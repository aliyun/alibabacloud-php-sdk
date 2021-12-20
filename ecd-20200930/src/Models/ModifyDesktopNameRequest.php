<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyDesktopNameRequest extends Model
{
    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var string
     */
    public $newDesktopName;

    /**
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
        Model::validateRequired('desktopId', $this->desktopId, true);
        Model::validateRequired('newDesktopName', $this->newDesktopName, true);
        Model::validateRequired('regionId', $this->regionId, true);
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
