<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListAppReleaseStageExecutionIntegratedMetadataResponse\body;

use AlibabaCloud\Tea\Model;

class changeRequests extends Model
{
    /**
     * @example fcd37726a6f84c60b7eb9c5856007c2f
     *
     * @var string
     */
    public $sn;

    /**
     * @var string
     */
    public $name;

    /**
     * @example feature/20240625
     *
     * @var string
     */
    public $branchName;

    /**
     * @example a66cfa8c6869b96bb7d111ba2144c9c764d556b7
     *
     * @var string
     */
    public $commitId;

    /**
     * @example 262579140573491041
     *
     * @var string
     */
    public $ownerAccountId;
    protected $_name = [
        'sn'             => 'sn',
        'name'           => 'name',
        'branchName'     => 'branchName',
        'commitId'       => 'commitId',
        'ownerAccountId' => 'ownerAccountId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sn) {
            $res['sn'] = $this->sn;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->branchName) {
            $res['branchName'] = $this->branchName;
        }
        if (null !== $this->commitId) {
            $res['commitId'] = $this->commitId;
        }
        if (null !== $this->ownerAccountId) {
            $res['ownerAccountId'] = $this->ownerAccountId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return changeRequests
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['sn'])) {
            $model->sn = $map['sn'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['branchName'])) {
            $model->branchName = $map['branchName'];
        }
        if (isset($map['commitId'])) {
            $model->commitId = $map['commitId'];
        }
        if (isset($map['ownerAccountId'])) {
            $model->ownerAccountId = $map['ownerAccountId'];
        }

        return $model;
    }
}
