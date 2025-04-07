<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class GetArtifactRepositoryCredentialsRequest extends Model
{
    /**
     * @description The type of the deployment package. Valid values:
     *
     *   File: Object Storage Service (OSS) object.
     *   AcrImage: container image.
     *
     * This parameter is required.
     *
     * @example File
     *
     * @var string
     */
    public $artifactType;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $deployRegionId;
    protected $_name = [
        'artifactType' => 'ArtifactType',
        'deployRegionId' => 'DeployRegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->artifactType) {
            $res['ArtifactType'] = $this->artifactType;
        }
        if (null !== $this->deployRegionId) {
            $res['DeployRegionId'] = $this->deployRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetArtifactRepositoryCredentialsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArtifactType'])) {
            $model->artifactType = $map['ArtifactType'];
        }
        if (isset($map['DeployRegionId'])) {
            $model->deployRegionId = $map['DeployRegionId'];
        }

        return $model;
    }
}
