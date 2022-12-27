<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class GetRepositoryCommitRequest extends Model
{
    /**
     * @example f0b1e61db5961df5975a93f9129d2513
     *
     * @var string
     */
    public $accessToken;

    /**
     * @example 60de7a6852743a5162b5f957
     *
     * @var string
     */
    public $organizationId;

    /**
     * @example false
     *
     * @var bool
     */
    public $showSignature;
    protected $_name = [
        'accessToken'    => 'accessToken',
        'organizationId' => 'organizationId',
        'showSignature'  => 'showSignature',
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
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }
        if (null !== $this->showSignature) {
            $res['showSignature'] = $this->showSignature;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRepositoryCommitRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }
        if (isset($map['showSignature'])) {
            $model->showSignature = $map['showSignature'];
        }

        return $model;
    }
}
