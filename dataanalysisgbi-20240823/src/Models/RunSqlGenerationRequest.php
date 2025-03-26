<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models;

use AlibabaCloud\Dara\Model;

class RunSqlGenerationRequest extends Model
{
    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $specificationType;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'query' => 'query',
        'sessionId' => 'sessionId',
        'specificationType' => 'specificationType',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
