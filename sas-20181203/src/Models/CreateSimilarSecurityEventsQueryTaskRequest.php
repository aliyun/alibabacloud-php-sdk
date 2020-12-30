<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateSimilarSecurityEventsQueryTaskRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $securityEventId;

    /**
     * @var string
     */
    public $similarEventScenarioCode;
    protected $_name = [
        'sourceIp'                 => 'SourceIp',
        'resourceOwnerId'          => 'ResourceOwnerId',
        'securityEventId'          => 'SecurityEventId',
        'similarEventScenarioCode' => 'SimilarEventScenarioCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityEventId) {
            $res['SecurityEventId'] = $this->securityEventId;
        }
        if (null !== $this->similarEventScenarioCode) {
            $res['SimilarEventScenarioCode'] = $this->similarEventScenarioCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSimilarSecurityEventsQueryTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
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
