<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\DeleteUserDefineRegionResponseBody;

use AlibabaCloud\Tea\Model;

class regionDefine extends Model
{
    /**
     * @description The ID of the region to which the custom namespace belongs.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $belongRegion;

    /**
     * @description The description of the custom namespace.
     *
     * @example logic region
     *
     * @var string
     */
    public $description;

    /**
     * @description The unique identifier of the custom namespace.
     *
     * @example 8848
     *
     * @var int
     */
    public $id;

    /**
     * @description The ID of the custom namespace. The ID cannot be changed after the custom namespace is created. The format is `region ID:custom namespace ID`.
     *
     * @example cn-beijing:test
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the custom namespace.
     *
     * @example test_region
     *
     * @var string
     */
    public $regionName;

    /**
     * @description The ID of the Alibaba Cloud account to which the custom namespace belongs.
     *
     * @example 11727****22398
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'belongRegion' => 'BelongRegion',
        'description'  => 'Description',
        'id'           => 'Id',
        'regionId'     => 'RegionId',
        'regionName'   => 'RegionName',
        'userId'       => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->belongRegion) {
            $res['BelongRegion'] = $this->belongRegion;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regionDefine
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BelongRegion'])) {
            $model->belongRegion = $map['BelongRegion'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
