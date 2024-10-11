<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class UpdateFileDirectoryRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example /xx测试/目录new
     *
     * @var string
     */
    public $directory;

    /**
     * @description This parameter is required.
     *
     * @example 12121111
     *
     * @var int
     */
    public $fileId;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;

    /**
     * @description This parameter is required.
     *
     * @example 12132323
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'directory'  => 'Directory',
        'fileId'     => 'FileId',
        'opTenantId' => 'OpTenantId',
        'projectId'  => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directory) {
            $res['Directory'] = $this->directory;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFileDirectoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Directory'])) {
            $model->directory = $map['Directory'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
