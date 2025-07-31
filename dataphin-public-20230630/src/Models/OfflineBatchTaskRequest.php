<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class OfflineBatchTaskRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example test xx
     *
     * @var string
     */
    public $comment;

    /**
     * @description This parameter is required.
     *
     * @example 12113111
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
     * @example 131211211
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'comment' => 'Comment',
        'fileId' => 'FileId',
        'opTenantId' => 'OpTenantId',
        'projectId' => 'ProjectId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
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
     * @return OfflineBatchTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
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
