<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class DeliverIncidentRequest extends Model
{
    /**
     * @example 212321
     *
     * @var int
     */
    public $assignUserId;

    /**
     * @example FD200FAE-E98F-496E-BFE6-4CE61CS9A221
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 1223212
     *
     * @var int
     */
    public $incidentId;
    protected $_name = [
        'assignUserId' => 'assignUserId',
        'clientToken'  => 'clientToken',
        'incidentId'   => 'incidentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignUserId) {
            $res['assignUserId'] = $this->assignUserId;
        }
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
     * @return DeliverIncidentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['assignUserId'])) {
            $model->assignUserId = $map['assignUserId'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['incidentId'])) {
            $model->incidentId = $map['incidentId'];
        }

        return $model;
    }
}
