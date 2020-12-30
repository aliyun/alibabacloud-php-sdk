<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models;

use AlibabaCloud\Tea\Model;

class DeleteResourceProfileRequest extends Model
{
    /**
     * @var string
     */
    public $resourceProfileId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'resourceProfileId' => 'ResourceProfileId',
        'regionId'          => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceProfileId) {
            $res['ResourceProfileId'] = $this->resourceProfileId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteResourceProfileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceProfileId'])) {
            $model->resourceProfileId = $map['ResourceProfileId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
