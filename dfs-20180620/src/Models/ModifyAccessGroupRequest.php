<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Tea\Model;

class ModifyAccessGroupRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example acg-e3755fb0-358d-4286-9942-8d461048****
     *
     * @var string
     */
    public $accessGroupId;

    /**
     * @example my-online-cluster-policy
     *
     * @var string
     */
    public $accessGroupName;

    /**
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $inputRegionId;
    protected $_name = [
        'accessGroupId' => 'AccessGroupId',
        'accessGroupName' => 'AccessGroupName',
        'description' => 'Description',
        'inputRegionId' => 'InputRegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessGroupId) {
            $res['AccessGroupId'] = $this->accessGroupId;
        }
        if (null !== $this->accessGroupName) {
            $res['AccessGroupName'] = $this->accessGroupName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->inputRegionId) {
            $res['InputRegionId'] = $this->inputRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAccessGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessGroupId'])) {
            $model->accessGroupId = $map['AccessGroupId'];
        }
        if (isset($map['AccessGroupName'])) {
            $model->accessGroupName = $map['AccessGroupName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InputRegionId'])) {
            $model->inputRegionId = $map['InputRegionId'];
        }

        return $model;
    }
}
