<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class OperationSuspEventsRequest extends Model
{
    /**
     * @example sas
     *
     * @var string
     */
    public $from;

    /**
     * @description WB01014029
     *
     * @example deal
     *
     * @var string
     */
    public $operation;

    /**
     * @description Handles multiple exceptions at a time.
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @example killAndQuaraFileByPidAndMd5andPath
     *
     * @var string
     */
    public $subOperation;

    /**
     * @description OperationSuspEvents
     *
     * @example 290852
     *
     * @var string
     */
    public $suspiciousEventIds;

    /**
     * @example alarm
     *
     * @var string
     */
    public $warnType;
    protected $_name = [
        'from'               => 'From',
        'operation'          => 'Operation',
        'sourceIp'           => 'SourceIp',
        'subOperation'       => 'SubOperation',
        'suspiciousEventIds' => 'SuspiciousEventIds',
        'warnType'           => 'WarnType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->subOperation) {
            $res['SubOperation'] = $this->subOperation;
        }
        if (null !== $this->suspiciousEventIds) {
            $res['SuspiciousEventIds'] = $this->suspiciousEventIds;
        }
        if (null !== $this->warnType) {
            $res['WarnType'] = $this->warnType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperationSuspEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['SubOperation'])) {
            $model->subOperation = $map['SubOperation'];
        }
        if (isset($map['SuspiciousEventIds'])) {
            $model->suspiciousEventIds = $map['SuspiciousEventIds'];
        }
        if (isset($map['WarnType'])) {
            $model->warnType = $map['WarnType'];
        }

        return $model;
    }
}
