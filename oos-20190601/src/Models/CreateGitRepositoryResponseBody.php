<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\CreateGitRepositoryResponseBody\gitRepo;

class CreateGitRepositoryResponseBody extends Model
{
    /**
     * @var gitRepo
     */
    public $gitRepo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'gitRepo' => 'GitRepo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->gitRepo) {
            $this->gitRepo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gitRepo) {
            $res['GitRepo'] = null !== $this->gitRepo ? $this->gitRepo->toArray($noStream) : $this->gitRepo;
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
        if (isset($map['GitRepo'])) {
            $model->gitRepo = gitRepo::fromMap($map['GitRepo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
