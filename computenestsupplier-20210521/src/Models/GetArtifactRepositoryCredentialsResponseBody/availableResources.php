<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetArtifactRepositoryCredentialsResponseBody;

use AlibabaCloud\Dara\Model;

class availableResources extends Model
{
    /**
     * @var string
     */
    public $path;
    /**
     * @var string
     */
    public $regionId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
