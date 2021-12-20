<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DeleteCloudDriveServicesRequest extends Model
{
    /**
     * @var string[]
     */
    public $cdsId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'cdsId'    => 'CdsId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        Model::validateRequired('cdsId', $this->cdsId, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCloudDriveServicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdsId'])) {
            if (!empty($map['CdsId'])) {
                $model->cdsId = $map['CdsId'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
