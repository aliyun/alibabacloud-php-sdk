<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models;

use AlibabaCloud\Tea\Model;

class RunDataAnalysisRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $generateSqlOnly;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $query;

    /**
     * @example sessionID
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
    protected $_name = [
        'generateSqlOnly'   => 'generateSqlOnly',
        'query'             => 'query',
        'sessionId'         => 'sessionId',
        'specificationType' => 'specificationType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->generateSqlOnly) {
            $res['generateSqlOnly'] = $this->generateSqlOnly;
        }
        if (null !== $this->query) {
            $res['query'] = $this->query;
        }
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }
        if (null !== $this->specificationType) {
            $res['specificationType'] = $this->specificationType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunDataAnalysisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['generateSqlOnly'])) {
            $model->generateSqlOnly = $map['generateSqlOnly'];
        }
        if (isset($map['query'])) {
            $model->query = $map['query'];
        }
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }
        if (isset($map['specificationType'])) {
            $model->specificationType = $map['specificationType'];
        }

        return $model;
    }
}
