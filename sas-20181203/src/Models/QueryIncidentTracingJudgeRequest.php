<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class QueryIncidentTracingJudgeRequest extends Model
{
    /**
     * @var string
     */
    public $incidentId;
    protected $_name = [
        'incidentId' => 'IncidentId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->incidentId) {
            $res['IncidentId'] = $this->incidentId;
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
        if (isset($map['IncidentId'])) {
            $model->incidentId = $map['IncidentId'];
        }

        return $model;
    }
}
