<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class DeployFunctionFileRequest extends Model
{
    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var int
     */
    public $deployEnv;
    protected $_name = [
        'projectId' => 'ProjectId',
        'fileId'    => 'FileId',
        'deployEnv' => 'DeployEnv',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->deployEnv) {
            $res['DeployEnv'] = $this->deployEnv;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeployFunctionFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['DeployEnv'])) {
            $model->deployEnv = $map['DeployEnv'];
        }

        return $model;
    }
}
