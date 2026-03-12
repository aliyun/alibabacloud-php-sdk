<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20160511\Models;

use AlibabaCloud\Dara\Model;

class CheckDomainResponseBody extends Model
{
    /**
     * @var int
     */
    public $avail;

    /**
     * @var string
     */
    public $feeCommand;

    /**
     * @var string
     */
    public $feeCurrency;

    /**
     * @var string
     */
    public $feeFee;

    /**
     * @var int
     */
    public $feePeriod;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $rmbFee;
    protected $_name = [
        'avail' => 'Avail',
        'feeCommand' => 'FeeCommand',
        'feeCurrency' => 'FeeCurrency',
        'feeFee' => 'FeeFee',
        'feePeriod' => 'FeePeriod',
        'name' => 'Name',
        'reason' => 'Reason',
        'requestId' => 'RequestId',
        'rmbFee' => 'RmbFee',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avail) {
            $res['Avail'] = $this->avail;
        }

        if (null !== $this->feeCommand) {
            $res['FeeCommand'] = $this->feeCommand;
        }

        if (null !== $this->feeCurrency) {
            $res['FeeCurrency'] = $this->feeCurrency;
        }

        if (null !== $this->feeFee) {
            $res['FeeFee'] = $this->feeFee;
        }

        if (null !== $this->feePeriod) {
            $res['FeePeriod'] = $this->feePeriod;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->rmbFee) {
            $res['RmbFee'] = $this->rmbFee;
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
        if (isset($map['Avail'])) {
            $model->avail = $map['Avail'];
        }

        if (isset($map['FeeCommand'])) {
            $model->feeCommand = $map['FeeCommand'];
        }

        if (isset($map['FeeCurrency'])) {
            $model->feeCurrency = $map['FeeCurrency'];
        }

        if (isset($map['FeeFee'])) {
            $model->feeFee = $map['FeeFee'];
        }

        if (isset($map['FeePeriod'])) {
            $model->feePeriod = $map['FeePeriod'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RmbFee'])) {
            $model->rmbFee = $map['RmbFee'];
        }

        return $model;
    }
}
