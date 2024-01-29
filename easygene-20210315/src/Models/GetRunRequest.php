<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class GetRunRequest extends Model
{
    /**
     * @example run-12kDbbqp5O9dfsH0sEdQeRclGQb
     *
     * @var string
     */
    public $runId;

    /**
     * @example default-workspace
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'runId'     => 'RunId',
        'workspace' => 'Workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->runId) {
            $res['RunId'] = $this->runId;
        }
        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRunRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RunId'])) {
            $model->runId = $map['RunId'];
        }
        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}
