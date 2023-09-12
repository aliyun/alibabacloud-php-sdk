<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class LogisticsOrderResult extends Model
{
    /**
     * @example 菜鸟
     *
     * @var string
     */
    public $dataProvider;

    /**
     * @example 菜鸟裹裹
     *
     * @var string
     */
    public $dataProviderTitle;

    /**
     * @var Good[]
     */
    public $goods;

    /**
     * @example SF
     *
     * @var string
     */
    public $logisticsCompanyCode;

    /**
     * @example 顺丰
     *
     * @var string
     */
    public $logisticsCompanyName;

    /**
     * @var LogisticsDetail[]
     */
    public $logisticsDetailList;

    /**
     * @example SF234***2345
     *
     * @var string
     */
    public $mailNo;
    protected $_name = [
        'dataProvider'         => 'dataProvider',
        'dataProviderTitle'    => 'dataProviderTitle',
        'goods'                => 'goods',
        'logisticsCompanyCode' => 'logisticsCompanyCode',
        'logisticsCompanyName' => 'logisticsCompanyName',
        'logisticsDetailList'  => 'logisticsDetailList',
        'mailNo'               => 'mailNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataProvider) {
            $res['dataProvider'] = $this->dataProvider;
        }
        if (null !== $this->dataProviderTitle) {
            $res['dataProviderTitle'] = $this->dataProviderTitle;
        }
        if (null !== $this->goods) {
            $res['goods'] = [];
            if (null !== $this->goods && \is_array($this->goods)) {
                $n = 0;
                foreach ($this->goods as $item) {
                    $res['goods'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['logisticsDetailList'] = [];
            if (null !== $this->logisticsDetailList && \is_array($this->logisticsDetailList)) {
                $n = 0;
                foreach ($this->logisticsDetailList as $item) {
                    $res['logisticsDetailList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->mailNo) {
            $res['mailNo'] = $this->mailNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LogisticsOrderResult
     */
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
                $n            = 0;
                foreach ($map['goods'] as $item) {
                    $model->goods[$n++] = null !== $item ? Good::fromMap($item) : $item;
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
                $n                          = 0;
                foreach ($map['logisticsDetailList'] as $item) {
                    $model->logisticsDetailList[$n++] = null !== $item ? LogisticsDetail::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['mailNo'])) {
            $model->mailNo = $map['mailNo'];
        }

        return $model;
    }
}
