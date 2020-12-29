<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class SendMseIncidentRequest extends Model
{
    /**
     * @var string
     */
    public $incidents;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $proxyUserId;
    protected $_name = [
        'incidents'   => 'Incidents',
        'regionId'    => 'RegionId',
        'proxyUserId' => 'ProxyUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->incidents) {
            $res['Incidents'] = $this->incidents;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->proxyUserId) {
            $res['ProxyUserId'] = $this->proxyUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendMseIncidentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Incidents'])) {
            $model->incidents = $map['Incidents'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ProxyUserId'])) {
            $model->proxyUserId = $map['ProxyUserId'];
        }

        return $model;
    }
}
