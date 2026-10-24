<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CsasEdr\V20241122\Models;

use AlibabaCloud\Dara\Model;

class CreateSimilarSecurityEventsQueryTaskRequest extends Model
{
    /**
     * @var int
     */
    public $securityEventId;

    /**
     * @var string
     */
    public $similarEventScenarioCode;
    protected $_name = [
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
        if (isset($map['SecurityEventId'])) {
            $model->securityEventId = $map['SecurityEventId'];
        }

        if (isset($map['SimilarEventScenarioCode'])) {
            $model->similarEventScenarioCode = $map['SimilarEventScenarioCode'];
        }

        return $model;
    }
}
