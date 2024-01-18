<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models;

use AlibabaCloud\Tea\Model;

class CheckDomainRequest extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $feeCommand;

    /**
     * @var string
     */
    public $feeCurrency;

    /**
     * @var int
     */
    public $feePeriod;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'domainName'   => 'DomainName',
        'feeCommand'   => 'FeeCommand',
        'feeCurrency'  => 'FeeCurrency',
        'feePeriod'    => 'FeePeriod',
        'lang'         => 'Lang',
        'userClientIp' => 'UserClientIp',
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
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
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
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
