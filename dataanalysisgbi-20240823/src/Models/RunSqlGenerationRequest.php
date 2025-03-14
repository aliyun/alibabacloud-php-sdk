<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models;

use AlibabaCloud\Tea\Model;

class RunSqlGenerationRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $query;

    /**
     * @example d5eced84-fd25-43ee-a245-adb4e4a8c3be
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example STANDARD_MIX
     *
     * @var string
     */
    public $specificationType;

    /**
     * @description This parameter is required.
     *
     * @example llm-2v3934xtp49esw64
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'query' => 'query',
        'sessionId' => 'sessionId',
        'specificationType' => 'specificationType',
        'workspaceId' => 'workspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->query) {
            $res['query'] = $this->query;
        }
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }
        if (null !== $this->specificationType) {
            $res['specificationType'] = $this->specificationType;
        }
        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunSqlGenerationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['query'])) {
            $model->query = $map['query'];
        }
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }
        if (isset($map['specificationType'])) {
            $model->specificationType = $map['specificationType'];
        }
        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
