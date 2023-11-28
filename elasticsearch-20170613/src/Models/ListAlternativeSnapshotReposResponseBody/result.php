<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListAlternativeSnapshotReposResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example es-cn-6ja1ro4jt000c****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The address of the repository.
     *
     * @example RepoPath
     *
     * @var string
     */
    public $repoPath;
    protected $_name = [
        'instanceId' => 'instanceId',
        'repoPath'   => 'repoPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->repoPath) {
            $res['repoPath'] = $this->repoPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['repoPath'])) {
            $model->repoPath = $map['repoPath'];
        }

        return $model;
    }
}
