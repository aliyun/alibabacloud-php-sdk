<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models\CreateCloseoutOrderResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string[]
     */
    public $bizIds;

    /**
     * @var string[]
     */
    public $buyerBlockTrade;

    /**
     * @var string[]
     */
    public $domainBlockTrade;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string[]
     */
    public $domainTradeRiskWarn;

    /**
     * @var string[]
     */
    public $extend;

    /**
     * @var string[][]
     */
    public $ignoredDomains;

    /**
     * @var bool
     */
    public $needPay;

    /**
     * @var string
     */
    public $orderNo;

    /**
     * @var float
     */
    public $orderSumMoney;

    /**
     * @var string
     */
    public $outOrderNo;

    /**
     * @var float
     */
    public $payMoney;

    /**
     * @var string
     */
    public $payUrl;

    /**
     * @var int[]
     */
    public $realNameTemplate;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bizIds' => 'BizIds',
        'buyerBlockTrade' => 'BuyerBlockTrade',
        'domainBlockTrade' => 'DomainBlockTrade',
        'domainName' => 'DomainName',
        'domainTradeRiskWarn' => 'DomainTradeRiskWarn',
        'extend' => 'Extend',
        'ignoredDomains' => 'IgnoredDomains',
        'needPay' => 'NeedPay',
        'orderNo' => 'OrderNo',
        'orderSumMoney' => 'OrderSumMoney',
        'outOrderNo' => 'OutOrderNo',
        'payMoney' => 'PayMoney',
        'payUrl' => 'PayUrl',
        'realNameTemplate' => 'RealNameTemplate',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->bizIds)) {
            Model::validateArray($this->bizIds);
        }
        if (\is_array($this->buyerBlockTrade)) {
            Model::validateArray($this->buyerBlockTrade);
        }
        if (\is_array($this->domainBlockTrade)) {
            Model::validateArray($this->domainBlockTrade);
        }
        if (\is_array($this->domainTradeRiskWarn)) {
            Model::validateArray($this->domainTradeRiskWarn);
        }
        if (\is_array($this->extend)) {
            Model::validateArray($this->extend);
        }
        if (\is_array($this->ignoredDomains)) {
            Model::validateArray($this->ignoredDomains);
        }
        if (\is_array($this->realNameTemplate)) {
            Model::validateArray($this->realNameTemplate);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizIds) {
            if (\is_array($this->bizIds)) {
                $res['BizIds'] = [];
                foreach ($this->bizIds as $key1 => $value1) {
                    $res['BizIds'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->buyerBlockTrade) {
            if (\is_array($this->buyerBlockTrade)) {
                $res['BuyerBlockTrade'] = [];
                $n1 = 0;
                foreach ($this->buyerBlockTrade as $item1) {
                    $res['BuyerBlockTrade'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->domainBlockTrade) {
            if (\is_array($this->domainBlockTrade)) {
                $res['DomainBlockTrade'] = [];
                $n1 = 0;
                foreach ($this->domainBlockTrade as $item1) {
                    $res['DomainBlockTrade'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->domainTradeRiskWarn) {
            if (\is_array($this->domainTradeRiskWarn)) {
                $res['DomainTradeRiskWarn'] = [];
                $n1 = 0;
                foreach ($this->domainTradeRiskWarn as $item1) {
                    $res['DomainTradeRiskWarn'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->extend) {
            if (\is_array($this->extend)) {
                $res['Extend'] = [];
                foreach ($this->extend as $key1 => $value1) {
                    $res['Extend'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->ignoredDomains) {
            if (\is_array($this->ignoredDomains)) {
                $res['IgnoredDomains'] = [];
                $n1 = 0;
                foreach ($this->ignoredDomains as $item1) {
                    if (\is_array($item1)) {
                        $res['IgnoredDomains'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['IgnoredDomains'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->needPay) {
            $res['NeedPay'] = $this->needPay;
        }

        if (null !== $this->orderNo) {
            $res['OrderNo'] = $this->orderNo;
        }

        if (null !== $this->orderSumMoney) {
            $res['OrderSumMoney'] = $this->orderSumMoney;
        }

        if (null !== $this->outOrderNo) {
            $res['OutOrderNo'] = $this->outOrderNo;
        }

        if (null !== $this->payMoney) {
            $res['PayMoney'] = $this->payMoney;
        }

        if (null !== $this->payUrl) {
            $res['PayUrl'] = $this->payUrl;
        }

        if (null !== $this->realNameTemplate) {
            if (\is_array($this->realNameTemplate)) {
                $res['RealNameTemplate'] = [];
                $n1 = 0;
                foreach ($this->realNameTemplate as $item1) {
                    $res['RealNameTemplate'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['BizIds'])) {
            if (!empty($map['BizIds'])) {
                $model->bizIds = [];
                foreach ($map['BizIds'] as $key1 => $value1) {
                    $model->bizIds[$key1] = $value1;
                }
            }
        }

        if (isset($map['BuyerBlockTrade'])) {
            if (!empty($map['BuyerBlockTrade'])) {
                $model->buyerBlockTrade = [];
                $n1 = 0;
                foreach ($map['BuyerBlockTrade'] as $item1) {
                    $model->buyerBlockTrade[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DomainBlockTrade'])) {
            if (!empty($map['DomainBlockTrade'])) {
                $model->domainBlockTrade = [];
                $n1 = 0;
                foreach ($map['DomainBlockTrade'] as $item1) {
                    $model->domainBlockTrade[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['DomainTradeRiskWarn'])) {
            if (!empty($map['DomainTradeRiskWarn'])) {
                $model->domainTradeRiskWarn = [];
                $n1 = 0;
                foreach ($map['DomainTradeRiskWarn'] as $item1) {
                    $model->domainTradeRiskWarn[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Extend'])) {
            if (!empty($map['Extend'])) {
                $model->extend = [];
                foreach ($map['Extend'] as $key1 => $value1) {
                    $model->extend[$key1] = $value1;
                }
            }
        }

        if (isset($map['IgnoredDomains'])) {
            if (!empty($map['IgnoredDomains'])) {
                $model->ignoredDomains = [];
                $n1 = 0;
                foreach ($map['IgnoredDomains'] as $item1) {
                    if (!empty($item1)) {
                        $model->ignoredDomains[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->ignoredDomains[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['NeedPay'])) {
            $model->needPay = $map['NeedPay'];
        }

        if (isset($map['OrderNo'])) {
            $model->orderNo = $map['OrderNo'];
        }

        if (isset($map['OrderSumMoney'])) {
            $model->orderSumMoney = $map['OrderSumMoney'];
        }

        if (isset($map['OutOrderNo'])) {
            $model->outOrderNo = $map['OutOrderNo'];
        }

        if (isset($map['PayMoney'])) {
            $model->payMoney = $map['PayMoney'];
        }

        if (isset($map['PayUrl'])) {
            $model->payUrl = $map['PayUrl'];
        }

        if (isset($map['RealNameTemplate'])) {
            if (!empty($map['RealNameTemplate'])) {
                $model->realNameTemplate = [];
                $n1 = 0;
                foreach ($map['RealNameTemplate'] as $item1) {
                    $model->realNameTemplate[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
