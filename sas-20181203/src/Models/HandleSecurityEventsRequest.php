<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class HandleSecurityEventsRequest extends Model
{
    /**
     * @example true
     *
     * @var string
     */
    public $markBatch;

    /**
     * @description HandleSecurityEvents
     *
     * @example [{"uuid":"part","field":"gmtModified","operate":"contains","fieldValue":"asd"},{"uuid":"part","field":"loginUser","operate":"contains","fieldValue":"vff"}]
     *
     * @var string
     */
    public $markMissParam;

    /**
     * @description Specifies whether to add multiple alert events to the whitelist at a time. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example block_ip
     *
     * @var string
     */
    public $operationCode;

    /**
     * @description Handles alert events.
     *
     * @example {}
     *
     * @var string
     */
    public $operationParams;

    /**
     * @example ["909361"]
     *
     * @var string[]
     */
    public $securityEventIds;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'markBatch'        => 'MarkBatch',
        'markMissParam'    => 'MarkMissParam',
        'operationCode'    => 'OperationCode',
        'operationParams'  => 'OperationParams',
        'securityEventIds' => 'SecurityEventIds',
        'sourceIp'         => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->markBatch) {
            $res['MarkBatch'] = $this->markBatch;
        }
        if (null !== $this->markMissParam) {
            $res['MarkMissParam'] = $this->markMissParam;
        }
        if (null !== $this->operationCode) {
            $res['OperationCode'] = $this->operationCode;
        }
        if (null !== $this->operationParams) {
            $res['OperationParams'] = $this->operationParams;
        }
        if (null !== $this->securityEventIds) {
            $res['SecurityEventIds'] = $this->securityEventIds;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HandleSecurityEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MarkBatch'])) {
            $model->markBatch = $map['MarkBatch'];
        }
        if (isset($map['MarkMissParam'])) {
            $model->markMissParam = $map['MarkMissParam'];
        }
        if (isset($map['OperationCode'])) {
            $model->operationCode = $map['OperationCode'];
        }
        if (isset($map['OperationParams'])) {
            $model->operationParams = $map['OperationParams'];
        }
        if (isset($map['SecurityEventIds'])) {
            if (!empty($map['SecurityEventIds'])) {
                $model->securityEventIds = $map['SecurityEventIds'];
            }
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
