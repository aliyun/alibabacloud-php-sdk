<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class DeleteSnapshotRepoRequest extends Model
{
    /**
     * @example 5A2CFF0E-5718-45B5-9D4D-70B3FF****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example es-cn-n6w1rux8i000w****
     *
     * @var string
     */
    public $repoPath;
    protected $_name = [
        'clientToken' => 'clientToken',
        'repoPath'    => 'repoPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->repoPath) {
            $res['repoPath'] = $this->repoPath;
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
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['repoPath'])) {
            $model->repoPath = $map['repoPath'];
        }

        return $model;
    }
}
