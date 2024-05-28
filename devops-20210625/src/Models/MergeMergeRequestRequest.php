<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class MergeMergeRequestRequest extends Model
{
    /**
     * @example 0cf2c8458ac44d9481aab2dd6ec10596v3
     *
     * @var string
     */
    public $accessToken;

    /**
     * @example ""
     *
     * @var string
     */
    public $mergeMessage;

    /**
     * @description This parameter is required.
     *
     * @example no-fast-forward
     *
     * @var string
     */
    public $mergeType;

    /**
     * @example true
     *
     * @var bool
     */
    public $removeSourceBranch;

    /**
     * @description This parameter is required.
     *
     * @example 60de7a6852743a5162b5f957
     *
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'accessToken'        => 'accessToken',
        'mergeMessage'       => 'mergeMessage',
        'mergeType'          => 'mergeType',
        'removeSourceBranch' => 'removeSourceBranch',
        'organizationId'     => 'organizationId',
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
        if (null !== $this->mergeMessage) {
            $res['mergeMessage'] = $this->mergeMessage;
        }
        if (null !== $this->mergeType) {
            $res['mergeType'] = $this->mergeType;
        }
        if (null !== $this->removeSourceBranch) {
            $res['removeSourceBranch'] = $this->removeSourceBranch;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MergeMergeRequestRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }
        if (isset($map['mergeMessage'])) {
            $model->mergeMessage = $map['mergeMessage'];
        }
        if (isset($map['mergeType'])) {
            $model->mergeType = $map['mergeType'];
        }
        if (isset($map['removeSourceBranch'])) {
            $model->removeSourceBranch = $map['removeSourceBranch'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        return $model;
    }
}
