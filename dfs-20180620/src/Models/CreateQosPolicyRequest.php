<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Dara\Model;

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
        'zoneIds' => 'ZoneIds',
    ];

    public function validate()
    {
        if (\is_array($this->flowIds)) {
            Model::validateArray($this->flowIds);
        }
        if (\is_array($this->zoneIds)) {
            Model::validateArray($this->zoneIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->flowIds)) {
                $res['FlowIds'] = [];
                $n1 = 0;
                foreach ($this->flowIds as $item1) {
                    $res['FlowIds'][$n1++] = $item1;
                }
            }
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

        if (null !== $this->zoneIds) {
            if (\is_array($this->zoneIds)) {
                $res['ZoneIds'] = [];
                $n1 = 0;
                foreach ($this->zoneIds as $item1) {
                    $res['ZoneIds'][$n1++] = $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->flowIds = [];
                $n1 = 0;
                foreach ($map['FlowIds'] as $item1) {
                    $model->flowIds[$n1++] = $item1;
                }
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

        if (isset($map['ZoneIds'])) {
            if (!empty($map['ZoneIds'])) {
                $model->zoneIds = [];
                $n1 = 0;
                foreach ($map['ZoneIds'] as $item1) {
                    $model->zoneIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
