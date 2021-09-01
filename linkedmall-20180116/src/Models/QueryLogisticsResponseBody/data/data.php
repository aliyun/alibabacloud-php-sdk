<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryLogisticsResponseBody\data;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryLogisticsResponseBody\data\data\goods;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryLogisticsResponseBody\data\data\logisticsDetailList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $logisticsCompanyCode;

    /**
     * @var string
     */
    public $mailNo;

    /**
     * @var string
     */
    public $logisticsCompanyName;

    /**
     * @var string
     */
    public $dataProvider;

    /**
     * @var string
     */
    public $dataProviderTitle;

    /**
     * @var logisticsDetailList
     */
    public $logisticsDetailList;

    /**
     * @var goods
     */
    public $goods;
    protected $_name = [
        'logisticsCompanyCode' => 'LogisticsCompanyCode',
        'mailNo'               => 'MailNo',
        'logisticsCompanyName' => 'LogisticsCompanyName',
        'dataProvider'         => 'DataProvider',
        'dataProviderTitle'    => 'DataProviderTitle',
        'logisticsDetailList'  => 'LogisticsDetailList',
        'goods'                => 'Goods',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logisticsCompanyCode) {
            $res['LogisticsCompanyCode'] = $this->logisticsCompanyCode;
        }
        if (null !== $this->mailNo) {
            $res['MailNo'] = $this->mailNo;
        }
        if (null !== $this->logisticsCompanyName) {
            $res['LogisticsCompanyName'] = $this->logisticsCompanyName;
        }
        if (null !== $this->dataProvider) {
            $res['DataProvider'] = $this->dataProvider;
        }
        if (null !== $this->dataProviderTitle) {
            $res['DataProviderTitle'] = $this->dataProviderTitle;
        }
        if (null !== $this->logisticsDetailList) {
            $res['LogisticsDetailList'] = null !== $this->logisticsDetailList ? $this->logisticsDetailList->toMap() : null;
        }
        if (null !== $this->goods) {
            $res['Goods'] = null !== $this->goods ? $this->goods->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogisticsCompanyCode'])) {
            $model->logisticsCompanyCode = $map['LogisticsCompanyCode'];
        }
        if (isset($map['MailNo'])) {
            $model->mailNo = $map['MailNo'];
        }
        if (isset($map['LogisticsCompanyName'])) {
            $model->logisticsCompanyName = $map['LogisticsCompanyName'];
        }
        if (isset($map['DataProvider'])) {
            $model->dataProvider = $map['DataProvider'];
        }
        if (isset($map['DataProviderTitle'])) {
            $model->dataProviderTitle = $map['DataProviderTitle'];
        }
        if (isset($map['LogisticsDetailList'])) {
            $model->logisticsDetailList = logisticsDetailList::fromMap($map['LogisticsDetailList']);
        }
        if (isset($map['Goods'])) {
            $model->goods = goods::fromMap($map['Goods']);
        }

        return $model;
    }
}
