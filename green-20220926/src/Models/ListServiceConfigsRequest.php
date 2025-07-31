<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class ListServiceConfigsRequest extends Model
{
    /**
     * @var string
     */
    public $classify;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example text
     *
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $useStatus;
    protected $_name = [
        'classify' => 'Classify',
        'regionId' => 'RegionId',
        'resourceType' => 'ResourceType',
        'useStatus' => 'UseStatus',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->useStatus) {
            $res['UseStatus'] = $this->useStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceConfigsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Classify'])) {
            $model->classify = $map['Classify'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['UseStatus'])) {
            $model->useStatus = $map['UseStatus'];
        }

        return $model;
    }
}
