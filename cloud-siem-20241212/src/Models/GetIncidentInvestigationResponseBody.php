<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetIncidentInvestigationResponseBody\incidentInvestigation;

class GetIncidentInvestigationResponseBody extends Model
{
    /**
     * @var incidentInvestigation
     */
    public $incidentInvestigation;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'incidentInvestigation' => 'IncidentInvestigation',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->incidentInvestigation) {
            $this->incidentInvestigation->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->incidentInvestigation) {
            $res['IncidentInvestigation'] = null !== $this->incidentInvestigation ? $this->incidentInvestigation->toArray($noStream) : $this->incidentInvestigation;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['IncidentInvestigation'])) {
            $model->incidentInvestigation = incidentInvestigation::fromMap($map['IncidentInvestigation']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
