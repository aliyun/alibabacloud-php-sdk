<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class GetIncidentListByIdListRequest extends Model
{
    /**
     * @example FD200FAE-E98F-496E-BFE6-4CE61E59A2E9
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var int[]
     */
    public $incidentIdList;
    protected $_name = [
        'clientToken'    => 'clientToken',
        'incidentIdList' => 'incidentIdList',
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
        if (null !== $this->incidentIdList) {
            $res['incidentIdList'] = $this->incidentIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetIncidentListByIdListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['incidentIdList'])) {
            if (!empty($map['incidentIdList'])) {
                $model->incidentIdList = $map['incidentIdList'];
            }
        }

        return $model;
    }
}
