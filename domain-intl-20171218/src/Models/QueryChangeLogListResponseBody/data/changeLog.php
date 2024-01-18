<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryChangeLogListResponseBody\data;

use AlibabaCloud\Tea\Model;

class changeLog extends Model
{
    /**
     * @var string
     */
    public $details;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $operation;

    /**
     * @var string
     */
    public $operationIPAddress;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'details'            => 'Details',
        'domainName'         => 'DomainName',
        'operation'          => 'Operation',
        'operationIPAddress' => 'OperationIPAddress',
        'result'             => 'Result',
        'time'               => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->details) {
            $res['Details'] = $this->details;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }
        if (null !== $this->operationIPAddress) {
            $res['OperationIPAddress'] = $this->operationIPAddress;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['Details'])) {
            $model->details = $map['Details'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }
        if (isset($map['OperationIPAddress'])) {
            $model->operationIPAddress = $map['OperationIPAddress'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
