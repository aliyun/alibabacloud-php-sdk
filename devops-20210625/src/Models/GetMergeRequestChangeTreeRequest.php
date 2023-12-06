<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class GetMergeRequestChangeTreeRequest extends Model
{
    /**
     * @example f0b1e61db5961df5975a93f9129d2513
     *
     * @var string
     */
    public $accessToken;

    /**
     * @example 5e733626d53f4b04a6aa0e23d4ff72b8
     *
     * @var string
     */
    public $fromPatchSetBizId;

    /**
     * @example 7
     *
     * @var int
     */
    public $localId;

    /**
     * @example 5ebbc0228123212b59xxxxx
     *
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $repositoryIdentity;

    /**
     * @example 513fcfd81a9142d2bb0db4f72c0aa15b
     *
     * @var string
     */
    public $toPatchSetBizId;
    protected $_name = [
        'accessToken'        => 'accessToken',
        'fromPatchSetBizId'  => 'fromPatchSetBizId',
        'localId'            => 'localId',
        'organizationId'     => 'organizationId',
        'repositoryIdentity' => 'repositoryIdentity',
        'toPatchSetBizId'    => 'toPatchSetBizId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetMergeRequestChangeTreeRequest
     */
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
