<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Tea\Model;

class CreateQosPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $federationId;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var int[]
     */
    public $flowIds;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $inputRegionId;

    /**
     * @var int
     */
    public $maxIOBandWidth;

    /**
     * @var int
     */
    public $maxIOps;

    /**
     * @var int
     */
    public $maxMetaQps;

    /**
     * @var string[]
     */
    public $reqTags;

    /**
     * @var string[]
     */
    public $zoneIds;
    protected $_name = [
        'description' => 'Description',
        'federationId' => 'FederationId',
        'fileSystemId' => 'FileSystemId',
        'flowIds' => 'FlowIds',
        'inputRegionId' => 'InputRegionId',
        'maxIOBandWidth' => 'MaxIOBandWidth',
        'maxIOps' => 'MaxIOps',
        'maxMetaQps' => 'MaxMetaQps',
        'reqTags' => 'ReqTags',
        'zoneIds' => 'ZoneIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->federationId) {
            $res['FederationId'] = $this->federationId;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->flowIds) {
            $res['FlowIds'] = $this->flowIds;
        }
        if (null !== $this->inputRegionId) {
            $res['InputRegionId'] = $this->inputRegionId;
        }
        if (null !== $this->maxIOBandWidth) {
            $res['MaxIOBandWidth'] = $this->maxIOBandWidth;
        }
        if (null !== $this->maxIOps) {
            $res['MaxIOps'] = $this->maxIOps;
        }
        if (null !== $this->maxMetaQps) {
            $res['MaxMetaQps'] = $this->maxMetaQps;
        }
        if (null !== $this->reqTags) {
            $res['ReqTags'] = $this->reqTags;
        }
        if (null !== $this->zoneIds) {
            $res['ZoneIds'] = $this->zoneIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateQosPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FederationId'])) {
            $model->federationId = $map['FederationId'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['FlowIds'])) {
            if (!empty($map['FlowIds'])) {
                $model->flowIds = $map['FlowIds'];
            }
        }
        if (isset($map['InputRegionId'])) {
            $model->inputRegionId = $map['InputRegionId'];
        }
        if (isset($map['MaxIOBandWidth'])) {
            $model->maxIOBandWidth = $map['MaxIOBandWidth'];
        }
        if (isset($map['MaxIOps'])) {
            $model->maxIOps = $map['MaxIOps'];
        }
        if (isset($map['MaxMetaQps'])) {
            $model->maxMetaQps = $map['MaxMetaQps'];
        }
        if (isset($map['ReqTags'])) {
            if (!empty($map['ReqTags'])) {
                $model->reqTags = $map['ReqTags'];
            }
        }
        if (isset($map['ZoneIds'])) {
            if (!empty($map['ZoneIds'])) {
                $model->zoneIds = $map['ZoneIds'];
            }
        }

        return $model;
    }
}
