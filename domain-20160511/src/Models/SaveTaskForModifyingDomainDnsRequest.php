<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20160511\Models;

use AlibabaCloud\Dara\Model;

class SaveTaskForModifyingDomainDnsRequest extends Model
{
    /**
     * @var bool
     */
    public $aliyunDns;

    /**
     * @var string[]
     */
    public $dnsList;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $saleId;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'aliyunDns' => 'AliyunDns',
        'dnsList' => 'DnsList',
        'domainName' => 'DomainName',
        'lang' => 'Lang',
        'saleId' => 'SaleId',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate()
    {
        if (\is_array($this->dnsList)) {
            Model::validateArray($this->dnsList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunDns) {
            $res['AliyunDns'] = $this->aliyunDns;
        }

        if (null !== $this->dnsList) {
            if (\is_array($this->dnsList)) {
                $res['DnsList'] = [];
                $n1 = 0;
                foreach ($this->dnsList as $item1) {
                    $res['DnsList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->saleId) {
            $res['SaleId'] = $this->saleId;
        }

        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
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
        if (isset($map['AliyunDns'])) {
            $model->aliyunDns = $map['AliyunDns'];
        }

        if (isset($map['DnsList'])) {
            if (!empty($map['DnsList'])) {
                $model->dnsList = [];
                $n1 = 0;
                foreach ($map['DnsList'] as $item1) {
                    $model->dnsList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['SaleId'])) {
            $model->saleId = $map['SaleId'];
        }

        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
