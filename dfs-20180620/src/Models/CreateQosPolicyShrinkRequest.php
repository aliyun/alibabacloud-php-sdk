<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Tea\Model;

class CreateQosPolicyShrinkRequest extends Model
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
     * @var string
     */
    public $flowIdsShrink;

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
     * @var string
     */
    public $reqTagsShrink;

    /**
     * @var string
     */
    public $zoneIdsShrink;
    protected $_name = [
        'description' => 'Description',
        'federationId' => 'FederationId',
        'fileSystemId' => 'FileSystemId',
        'flowIdsShrink' => 'FlowIds',
        'inputRegionId' => 'InputRegionId',
        'maxIOBandWidth' => 'MaxIOBandWidth',
        'maxIOps' => 'MaxIOps',
        'maxMetaQps' => 'MaxMetaQps',
        'reqTagsShrink' => 'ReqTags',
        'zoneIdsShrink' => 'ZoneIds',
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
        if (null !== $this->flowIdsShrink) {
            $res['FlowIds'] = $this->flowIdsShrink;
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
        if (null !== $this->reqTagsShrink) {
            $res['ReqTags'] = $this->reqTagsShrink;
        }
        if (null !== $this->zoneIdsShrink) {
            $res['ZoneIds'] = $this->zoneIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateQosPolicyShrinkRequest
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
            $model->flowIdsShrink = $map['FlowIds'];
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
            $model->reqTagsShrink = $map['ReqTags'];
        }
        if (isset($map['ZoneIds'])) {
            $model->zoneIdsShrink = $map['ZoneIds'];
        }

        return $model;
    }
}
