<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;

class CheckGitRepositoryExistsResponseBody extends Model
{
    /**
     * @var bool
     */
    public $repoExists;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'repoExists' => 'RepoExists',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->repoExists) {
            $res['RepoExists'] = $this->repoExists;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['RepoExists'])) {
            $model->repoExists = $map['RepoExists'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
