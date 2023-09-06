<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class CreateJobFileRequest extends Model
{
    /**
     * @description Indicates whether to use an asynchronous link to submit job files.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $async;

    /**
     * @description The ID of the E-HPC cluster.
     *
     * You can call the [ListClusters](~~87116~~) operation to query the cluster ID.
     * @example ehpc-hz-jeJki6****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The content of the job file. The content is encoded in Base64.
     *
     * @example c2xlZXAgMzA=
     *
     * @var string
     */
    public $content;

    /**
     * @description The user to which the job file belongs.
     *
     * You can call the [ListUsers](~~188572~~) operation to query the users of the cluster.
     * @example testuser1
     *
     * @var string
     */
    public $runasUser;

    /**
     * @description The user password.
     *
     * @example !QAZ****
     *
     * @var string
     */
    public $runasUserPassword;

    /**
     * @description The name of the job file.
     *
     * @example lammps.pbs
     *
     * @var string
     */
    public $targetFile;
    protected $_name = [
        'async'             => 'Async',
        'clusterId'         => 'ClusterId',
        'content'           => 'Content',
        'runasUser'         => 'RunasUser',
        'runasUserPassword' => 'RunasUserPassword',
        'targetFile'        => 'TargetFile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->runasUser) {
            $res['RunasUser'] = $this->runasUser;
        }
        if (null !== $this->runasUserPassword) {
            $res['RunasUserPassword'] = $this->runasUserPassword;
        }
        if (null !== $this->targetFile) {
            $res['TargetFile'] = $this->targetFile;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateJobFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['RunasUser'])) {
            $model->runasUser = $map['RunasUser'];
        }
        if (isset($map['RunasUserPassword'])) {
            $model->runasUserPassword = $map['RunasUserPassword'];
        }
        if (isset($map['TargetFile'])) {
            $model->targetFile = $map['TargetFile'];
        }

        return $model;
    }
}
