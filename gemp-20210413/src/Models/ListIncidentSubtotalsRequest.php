<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListIncidentSubtotalsRequest extends Model
{
    /**
     * @example FD200FAE-E98F-496E-BFE6-4CE62E59A2E9
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 3123
     *
     * @var int
     */
    public $incidentId;
    protected $_name = [
        'clientToken' => 'clientToken',
        'incidentId'  => 'incidentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->incidentId) {
            $res['incidentId'] = $this->incidentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIncidentSubtotalsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['incidentId'])) {
            $model->incidentId = $map['incidentId'];
        }

        return $model;
    }
}
