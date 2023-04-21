<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetSpMetadataRequest extends Model
{
    /**
     * @description The ID of the workspace. The parameter is the same as the `OfficeSiteId` parameter. We recommend that you use `OfficeSiteId` instead of `DirectoryId`. You can specify a value for either the `DirectoryId` parameter or the `OfficeSiteId` parameter, but not both.
     *
     * @example cn-hangzhou+dir-400695****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The ID of the workspace.
     *
     * @example cn-hangzhou+dir-400695****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'directoryId'  => 'DirectoryId',
        'officeSiteId' => 'OfficeSiteId',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSpMetadataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
