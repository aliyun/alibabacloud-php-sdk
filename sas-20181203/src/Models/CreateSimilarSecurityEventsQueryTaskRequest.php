<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateSimilarSecurityEventsQueryTaskRequest extends Model
{
    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @example 14323
     *
     * @var int
     */
    public $securityEventId;

    /**
     * @example default
     *
     * @var string
     */
    public $similarEventScenarioCode;

    /**
     * @description CreateSimilarSecurityEventsQueryTask
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'resourceOwnerId'          => 'ResourceOwnerId',
        'securityEventId'          => 'SecurityEventId',
        'similarEventScenarioCode' => 'SimilarEventScenarioCode',
        'sourceIp'                 => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityEventId) {
            $res['SecurityEventId'] = $this->securityEventId;
        }
        if (null !== $this->similarEventScenarioCode) {
            $res['SimilarEventScenarioCode'] = $this->similarEventScenarioCode;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityEventId'])) {
            $model->securityEventId = $map['SecurityEventId'];
        }
        if (isset($map['SimilarEventScenarioCode'])) {
            $model->similarEventScenarioCode = $map['SimilarEventScenarioCode'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
