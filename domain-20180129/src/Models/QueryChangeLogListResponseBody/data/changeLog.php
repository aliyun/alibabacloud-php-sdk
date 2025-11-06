<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryChangeLogListResponseBody\data;

use AlibabaCloud\Dara\Model;

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
    public $remark;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'details' => 'Details',
        'domainName' => 'DomainName',
        'operation' => 'Operation',
        'operationIPAddress' => 'OperationIPAddress',
        'remark' => 'Remark',
        'result' => 'Result',
        'time' => 'Time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
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

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
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
