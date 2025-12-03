<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class GetMergeRequestChangeTreeRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var string
     */
    public $fromPatchSetBizId;

    /**
     * @var int
     */
    public $localId;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $repositoryIdentity;

    /**
     * @var string
     */
    public $toPatchSetBizId;
    protected $_name = [
        'accessToken' => 'accessToken',
        'fromPatchSetBizId' => 'fromPatchSetBizId',
        'localId' => 'localId',
        'organizationId' => 'organizationId',
        'repositoryIdentity' => 'repositoryIdentity',
        'toPatchSetBizId' => 'toPatchSetBizId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
        }

        if (null !== $this->fromPatchSetBizId) {
            $res['fromPatchSetBizId'] = $this->fromPatchSetBizId;
        }

        if (null !== $this->localId) {
            $res['localId'] = $this->localId;
        }

        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        if (null !== $this->repositoryIdentity) {
            $res['repositoryIdentity'] = $this->repositoryIdentity;
        }

        if (null !== $this->toPatchSetBizId) {
            $res['toPatchSetBizId'] = $this->toPatchSetBizId;
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
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }

        if (isset($map['fromPatchSetBizId'])) {
            $model->fromPatchSetBizId = $map['fromPatchSetBizId'];
        }

        if (isset($map['localId'])) {
            $model->localId = $map['localId'];
        }

        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        if (isset($map['repositoryIdentity'])) {
            $model->repositoryIdentity = $map['repositoryIdentity'];
        }

        if (isset($map['toPatchSetBizId'])) {
            $model->toPatchSetBizId = $map['toPatchSetBizId'];
        }

        return $model;
    }
}
