<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetAliYunSafeCenterResultRequest;

use AlibabaCloud\Dara\Model;

class createSimilarSecurityEventsQueryTaskRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $securityEventId;

    /**
     * @var string
     */
    public $similarEventScenarioCode;
    protected $_name = [
        'regionId' => 'RegionId',
        'securityEventId' => 'SecurityEventId',
        'similarEventScenarioCode' => 'SimilarEventScenarioCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->securityEventId) {
            $res['SecurityEventId'] = $this->securityEventId;
        }

        if (null !== $this->similarEventScenarioCode) {
            $res['SimilarEventScenarioCode'] = $this->similarEventScenarioCode;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SecurityEventId'])) {
            $model->securityEventId = $map['SecurityEventId'];
        }

        if (isset($map['SimilarEventScenarioCode'])) {
            $model->similarEventScenarioCode = $map['SimilarEventScenarioCode'];
        }

        return $model;
    }
}
