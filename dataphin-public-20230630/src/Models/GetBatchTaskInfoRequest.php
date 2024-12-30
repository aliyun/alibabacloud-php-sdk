<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class GetBatchTaskInfoRequest extends Model
{
    /**
     * @example dev
     *
     * @var string
     */
    public $env;

    /**
     * @description This parameter is required.
     *
     * @example 12113111
     *
     * @var int
     */
    public $fileId;

    /**
     * @var bool
     */
    public $includeAllUpStreams;

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
        'env'                 => 'Env',
        'fileId'              => 'FileId',
        'includeAllUpStreams' => 'IncludeAllUpStreams',
        'opTenantId'          => 'OpTenantId',
        'projectId'           => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->includeAllUpStreams) {
            $res['IncludeAllUpStreams'] = $this->includeAllUpStreams;
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
     * @return GetBatchTaskInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['IncludeAllUpStreams'])) {
            $model->includeAllUpStreams = $map['IncludeAllUpStreams'];
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
