<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetIncidentResponseBody\incident;

class GetIncidentResponseBody extends Model
{
    /**
     * @var incident
     */
    public $incident;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'incident' => 'Incident',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->incident) {
            $this->incident->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->incident) {
            $res['Incident'] = null !== $this->incident ? $this->incident->toArray($noStream) : $this->incident;
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
        if (isset($map['Incident'])) {
            $model->incident = incident::fromMap($map['Incident']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
