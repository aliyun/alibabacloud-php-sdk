<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class DeleteSnapshotRepoRequest extends Model
{
    /**
     * @var string
     */
    public $repoPath;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'repoPath'    => 'repoPath',
        'clientToken' => 'clientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->repoPath) {
            $res['repoPath'] = $this->repoPath;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSnapshotRepoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['repoPath'])) {
            $model->repoPath = $map['repoPath'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
