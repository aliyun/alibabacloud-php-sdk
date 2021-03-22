<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetMetaProductListResponseBody\metaData\productsNormal;

use AlibabaCloud\Tea\Model;

class specVO extends Model
{
    /**
     * @var string
     */
    public $topicQuota;

    /**
     * @var string
     */
    public $specType;

    /**
     * @var string
     */
    public $deployType;

    /**
     * @var string
     */
    public $diskSize;

    /**
     * @var int
     */
    public $ioMax;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'topicQuota' => 'TopicQuota',
        'specType'   => 'SpecType',
        'deployType' => 'DeployType',
        'diskSize'   => 'DiskSize',
        'ioMax'      => 'IoMax',
        'diskType'   => 'DiskType',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->topicQuota) {
            $res['TopicQuota'] = $this->topicQuota;
        }
        if (null !== $this->specType) {
            $res['SpecType'] = $this->specType;
        }
        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->ioMax) {
            $res['IoMax'] = $this->ioMax;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return specVO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TopicQuota'])) {
            $model->topicQuota = $map['TopicQuota'];
        }
        if (isset($map['SpecType'])) {
            $model->specType = $map['SpecType'];
        }
        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['IoMax'])) {
            $model->ioMax = $map['IoMax'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
