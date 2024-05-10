<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class QueryIncidentTracingDetailRequest extends Model
{
    /**
     * @description The ID of the event.
     *
     * This parameter is required.
     * @example 184892fc5245b3ce8c3316434c94261f
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
     * @return QueryIncidentTracingDetailRequest
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
