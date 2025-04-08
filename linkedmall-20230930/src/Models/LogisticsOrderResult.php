<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class LogisticsOrderResult extends Model
{
    /**
     * @var string
     */
    public $dataProvider;

    /**
     * @var string
     */
    public $dataProviderTitle;

    /**
     * @var Good[]
     */
    public $goods;

    /**
     * @var string
     */
    public $logisticsCompanyCode;

    /**
     * @var string
     */
    public $logisticsCompanyName;

    /**
     * @var LogisticsDetail[]
     */
    public $logisticsDetailList;

    /**
     * @var string
     */
    public $mailNo;
    protected $_name = [
        'dataProvider' => 'dataProvider',
        'dataProviderTitle' => 'dataProviderTitle',
        'goods' => 'goods',
        'logisticsCompanyCode' => 'logisticsCompanyCode',
        'logisticsCompanyName' => 'logisticsCompanyName',
        'logisticsDetailList' => 'logisticsDetailList',
        'mailNo' => 'mailNo',
    ];

    public function validate()
    {
        if (\is_array($this->goods)) {
            Model::validateArray($this->goods);
        }
        if (\is_array($this->logisticsDetailList)) {
            Model::validateArray($this->logisticsDetailList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataProvider) {
            $res['dataProvider'] = $this->dataProvider;
        }

        if (null !== $this->dataProviderTitle) {
            $res['dataProviderTitle'] = $this->dataProviderTitle;
        }

        if (null !== $this->goods) {
            if (\is_array($this->goods)) {
                $res['goods'] = [];
                $n1 = 0;
                foreach ($this->goods as $item1) {
                    $res['goods'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->logisticsCompanyCode) {
            $res['logisticsCompanyCode'] = $this->logisticsCompanyCode;
        }

        if (null !== $this->logisticsCompanyName) {
            $res['logisticsCompanyName'] = $this->logisticsCompanyName;
        }

        if (null !== $this->logisticsDetailList) {
            if (\is_array($this->logisticsDetailList)) {
                $res['logisticsDetailList'] = [];
                $n1 = 0;
                foreach ($this->logisticsDetailList as $item1) {
                    $res['logisticsDetailList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->mailNo) {
            $res['mailNo'] = $this->mailNo;
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
        if (isset($map['dataProvider'])) {
            $model->dataProvider = $map['dataProvider'];
        }

        if (isset($map['dataProviderTitle'])) {
            $model->dataProviderTitle = $map['dataProviderTitle'];
        }

        if (isset($map['goods'])) {
            if (!empty($map['goods'])) {
                $model->goods = [];
                $n1 = 0;
                foreach ($map['goods'] as $item1) {
                    $model->goods[$n1++] = Good::fromMap($item1);
                }
            }
        }

        if (isset($map['logisticsCompanyCode'])) {
            $model->logisticsCompanyCode = $map['logisticsCompanyCode'];
        }

        if (isset($map['logisticsCompanyName'])) {
            $model->logisticsCompanyName = $map['logisticsCompanyName'];
        }

        if (isset($map['logisticsDetailList'])) {
            if (!empty($map['logisticsDetailList'])) {
                $model->logisticsDetailList = [];
                $n1 = 0;
                foreach ($map['logisticsDetailList'] as $item1) {
                    $model->logisticsDetailList[$n1++] = LogisticsDetail::fromMap($item1);
                }
            }
        }

        if (isset($map['mailNo'])) {
            $model->mailNo = $map['mailNo'];
        }

        return $model;
    }
}
