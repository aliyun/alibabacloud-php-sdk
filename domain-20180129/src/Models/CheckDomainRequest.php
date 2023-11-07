<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class CheckDomainRequest extends Model
{
    /**
     * @example test**.xin
     *
     * @var string
     */
    public $domainName;

    /**
     * @example create
     *
     * @var string
     */
    public $feeCommand;

    /**
     * @example USD
     *
     * @var string
     */
    public $feeCurrency;

    /**
     * @example 1
     *
     * @var int
     */
    public $feePeriod;

    /**
     * @example en
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'domainName'  => 'DomainName',
        'feeCommand'  => 'FeeCommand',
        'feeCurrency' => 'FeeCurrency',
        'feePeriod'   => 'FeePeriod',
        'lang'        => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->feeCommand) {
            $res['FeeCommand'] = $this->feeCommand;
        }
        if (null !== $this->feeCurrency) {
            $res['FeeCurrency'] = $this->feeCurrency;
        }
        if (null !== $this->feePeriod) {
            $res['FeePeriod'] = $this->feePeriod;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['FeeCommand'])) {
            $model->feeCommand = $map['FeeCommand'];
        }
        if (isset($map['FeeCurrency'])) {
            $model->feeCurrency = $map['FeeCurrency'];
        }
        if (isset($map['FeePeriod'])) {
            $model->feePeriod = $map['FeePeriod'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
