<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Tea\Model;

class CreateAccessRuleRequest extends Model
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

    /**
     * @description This parameter is required.
     *
     * @example 192.0.2.0/24
     *
     * @var string
     */
    public $networkSegment;

    /**
     * @description This parameter is required.
     *
     * @example 2
     *
     * @var int
     */
    public $priority;

    /**
     * @description This parameter is required.
     *
     * @example RDWR
     *
     * @var string
     */
    public $RWAccessType;
    protected $_name = [
        'accessGroupId' => 'AccessGroupId',
        'description' => 'Description',
        'inputRegionId' => 'InputRegionId',
        'networkSegment' => 'NetworkSegment',
        'priority' => 'Priority',
        'RWAccessType' => 'RWAccessType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessGroupId) {
            $res['AccessGroupId'] = $this->accessGroupId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->inputRegionId) {
            $res['InputRegionId'] = $this->inputRegionId;
        }
        if (null !== $this->networkSegment) {
            $res['NetworkSegment'] = $this->networkSegment;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->RWAccessType) {
            $res['RWAccessType'] = $this->RWAccessType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAccessRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessGroupId'])) {
            $model->accessGroupId = $map['AccessGroupId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InputRegionId'])) {
            $model->inputRegionId = $map['InputRegionId'];
        }
        if (isset($map['NetworkSegment'])) {
            $model->networkSegment = $map['NetworkSegment'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['RWAccessType'])) {
            $model->RWAccessType = $map['RWAccessType'];
        }

        return $model;
    }
}
