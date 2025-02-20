<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class MergeMergeRequestRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;
    /**
     * @var string
     */
    public $mergeMessage;
    /**
     * @var string
     */
    public $mergeType;
    /**
     * @var bool
     */
    public $removeSourceBranch;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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
