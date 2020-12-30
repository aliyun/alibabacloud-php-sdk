<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryChangeLogListResponseBody\data;

use AlibabaCloud\Tea\Model;

class changeLog extends Model
{
    /**
     * @var string
     */
    public $operation;

    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $operationIPAddress;

    /**
     * @var string
     */
    public $details;
    protected $_name = [
        'operation'          => 'Operation',
        'time'               => 'Time',
        'result'             => 'Result',
        'domainName'         => 'DomainName',
        'operationIPAddress' => 'OperationIPAddress',
        'details'            => 'Details',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->operationIPAddress) {
            $res['OperationIPAddress'] = $this->operationIPAddress;
        }
        if (null !== $this->details) {
            $res['Details'] = $this->details;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return changeLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['OperationIPAddress'])) {
            $model->operationIPAddress = $map['OperationIPAddress'];
        }
        if (isset($map['Details'])) {
            $model->details = $map['Details'];
        }

        return $model;
    }
}
