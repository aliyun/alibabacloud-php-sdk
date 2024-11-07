<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateArtifactRequest;

use AlibabaCloud\Tea\Model;

class artifactBuildProperty extends Model
{
    /**
     * @var string
     */
    public $commandContent;

    /**
     * @var string
     */
    public $commandType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sourceImageId;
    protected $_name = [
        'commandContent' => 'CommandContent',
        'commandType'    => 'CommandType',
        'regionId'       => 'RegionId',
        'sourceImageId'  => 'SourceImageId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }
        if (null !== $this->commandType) {
            $res['CommandType'] = $this->commandType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sourceImageId) {
            $res['SourceImageId'] = $this->sourceImageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return artifactBuildProperty
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommandContent'])) {
            $model->commandContent = $map['CommandContent'];
        }
        if (isset($map['CommandType'])) {
            $model->commandType = $map['CommandType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SourceImageId'])) {
            $model->sourceImageId = $map['SourceImageId'];
        }

        return $model;
    }
}
