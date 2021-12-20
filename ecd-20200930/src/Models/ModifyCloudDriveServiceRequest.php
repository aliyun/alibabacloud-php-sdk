<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyCloudDriveServiceRequest extends Model
{
    /**
     * @var string
     */
    public $cdsId;

    /**
     * @var string
     */
    public $cdsName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'cdsId'    => 'CdsId',
        'cdsName'  => 'CdsName',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        Model::validateRequired('cdsId', $this->cdsId, true);
        Model::validateRequired('cdsName', $this->cdsName, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }
        if (null !== $this->cdsName) {
            $res['CdsName'] = $this->cdsName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCloudDriveServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }
        if (isset($map['CdsName'])) {
            $model->cdsName = $map['CdsName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
