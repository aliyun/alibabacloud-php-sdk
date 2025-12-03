<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListAppReleaseStageExecutionIntegratedMetadataResponse\body;

use AlibabaCloud\Dara\Model;

class changeRequests extends Model
{
    /**
     * @var string
     */
    public $sn;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $branchName;

    /**
     * @var string
     */
    public $commitId;

    /**
     * @var string
     */
    public $ownerAccountId;
    protected $_name = [
        'sn' => 'sn',
        'name' => 'name',
        'branchName' => 'branchName',
        'commitId' => 'commitId',
        'ownerAccountId' => 'ownerAccountId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
