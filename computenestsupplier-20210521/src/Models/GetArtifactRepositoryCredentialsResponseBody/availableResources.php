<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetArtifactRepositoryCredentialsResponseBody;

use AlibabaCloud\Tea\Model;

class availableResources extends Model
{
    /**
     * @description The path.
     *
     * @example "/xxx/"
     *
     * @var string
     */
    public $path;

    /**
     * @description The region ID.
     *
     * @example oss-cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The repository name.
     *
     * @example computenest-artifacts-draft-cn-hangzhou
     *
     * @var string
     */
    public $repositoryName;
    protected $_name = [
        'path'           => 'Path',
        'regionId'       => 'RegionId',
        'repositoryName' => 'RepositoryName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->repositoryName) {
            $res['RepositoryName'] = $this->repositoryName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RepositoryName'])) {
            $model->repositoryName = $map['RepositoryName'];
        }

        return $model;
    }
}
