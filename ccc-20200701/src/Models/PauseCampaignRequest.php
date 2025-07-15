<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class PauseCampaignRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 6badb397-a8b5-40b6-21019d382a09
     *
     * @var string
     */
    public $campaignId;

    /**
     * @description This parameter is required.
     *
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'campaignId' => 'CampaignId',
        'instanceId' => 'InstanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->campaignId) {
            $res['CampaignId'] = $this->campaignId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PauseCampaignRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CampaignId'])) {
            $model->campaignId = $map['CampaignId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
