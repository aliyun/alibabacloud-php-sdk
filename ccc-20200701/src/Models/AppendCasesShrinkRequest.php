<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class AppendCasesShrinkRequest extends Model
{
    /**
     * @example 78cf6864-9a22-4ea8-a59d-5adc2d747b0e
     *
     * @var string
     */
    public $campaignId;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $bodyShrink;
    protected $_name = [
        'campaignId' => 'CampaignId',
        'instanceId' => 'InstanceId',
        'bodyShrink' => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->campaignId) {
            $res['CampaignId'] = $this->campaignId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->bodyShrink) {
            $res['body'] = $this->bodyShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AppendCasesShrinkRequest
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
        if (isset($map['body'])) {
            $model->bodyShrink = $map['body'];
        }

        return $model;
    }
}
