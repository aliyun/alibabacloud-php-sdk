<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class OperationSuspEventsRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $suspiciousEventIds;

    /**
     * @var string
     */
    public $operation;

    /**
     * @var string
     */
    public $subOperation;

    /**
     * @var string
     */
    public $from;

    /**
     * @var string
     */
    public $warnType;
    protected $_name = [
        'sourceIp'           => 'SourceIp',
        'suspiciousEventIds' => 'SuspiciousEventIds',
        'operation'          => 'Operation',
        'subOperation'       => 'SubOperation',
        'from'               => 'From',
        'warnType'           => 'WarnType',
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
        if (null !== $this->suspiciousEventIds) {
            $res['SuspiciousEventIds'] = $this->suspiciousEventIds;
        }
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }
        if (null !== $this->subOperation) {
            $res['SubOperation'] = $this->subOperation;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
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
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['SuspiciousEventIds'])) {
            $model->suspiciousEventIds = $map['SuspiciousEventIds'];
        }
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }
        if (isset($map['SubOperation'])) {
            $model->subOperation = $map['SubOperation'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['WarnType'])) {
            $model->warnType = $map['WarnType'];
        }

        return $model;
    }
}
