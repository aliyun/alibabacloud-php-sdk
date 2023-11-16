<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class QueryIncidentTracingJudgeRequest extends Model
{
    /**
     * @description The event ID.
     *
     * @example d1d7a612-0dc2-413a-aa8e-9c7c88d8d12a
     *
     * @var string
     */
    public $incidentId;
    protected $_name = [
        'incidentId' => 'IncidentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->incidentId) {
            $res['IncidentId'] = $this->incidentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryIncidentTracingJudgeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IncidentId'])) {
            $model->incidentId = $map['IncidentId'];
        }

        return $model;
    }
}
