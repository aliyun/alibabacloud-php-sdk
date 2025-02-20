<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class GetCheckRunRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;
    /**
     * @var int
     */
    public $checkRunId;
    /**
     * @var string
     */
    public $organizationId;
    /**
     * @var string
     */
    public $repositoryIdentity;
    protected $_name = [
        'accessToken'        => 'accessToken',
        'checkRunId'         => 'checkRunId',
        'organizationId'     => 'organizationId',
        'repositoryIdentity' => 'repositoryIdentity',
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

        if (null !== $this->checkRunId) {
            $res['checkRunId'] = $this->checkRunId;
        }

        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        if (null !== $this->repositoryIdentity) {
            $res['repositoryIdentity'] = $this->repositoryIdentity;
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

        if (isset($map['checkRunId'])) {
            $model->checkRunId = $map['checkRunId'];
        }

        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        if (isset($map['repositoryIdentity'])) {
            $model->repositoryIdentity = $map['repositoryIdentity'];
        }

        return $model;
    }
}
