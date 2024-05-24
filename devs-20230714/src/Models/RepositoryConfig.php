<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class RepositoryConfig extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example master
     *
     * @var string
     */
    public $branchName;

    /**
     * @example src/s.yaml
     *
     * @var string
     */
    public $manifest;

    /**
     * @description This parameter is required.
     *
     * @example my-repository
     *
     * @var string
     */
    public $repositoryName;
    protected $_name = [
        'branchName'     => 'branchName',
        'manifest'       => 'manifest',
        'repositoryName' => 'repositoryName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->branchName) {
            $res['branchName'] = $this->branchName;
        }
        if (null !== $this->manifest) {
            $res['manifest'] = $this->manifest;
        }
        if (null !== $this->repositoryName) {
            $res['repositoryName'] = $this->repositoryName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RepositoryConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['branchName'])) {
            $model->branchName = $map['branchName'];
        }
        if (isset($map['manifest'])) {
            $model->manifest = $map['manifest'];
        }
        if (isset($map['repositoryName'])) {
            $model->repositoryName = $map['repositoryName'];
        }

        return $model;
    }
}
