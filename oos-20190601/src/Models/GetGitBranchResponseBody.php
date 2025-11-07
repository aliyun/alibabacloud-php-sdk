<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\GetGitBranchResponseBody\commit;

class GetGitBranchResponseBody extends Model
{
    /**
     * @var commit
     */
    public $commit;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'commit' => 'Commit',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->commit) {
            $this->commit->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commit) {
            $res['Commit'] = null !== $this->commit ? $this->commit->toArray($noStream) : $this->commit;
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
        if (isset($map['Commit'])) {
            $model->commit = commit::fromMap($map['Commit']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
