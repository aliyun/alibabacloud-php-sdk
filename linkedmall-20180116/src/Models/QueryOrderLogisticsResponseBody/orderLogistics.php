<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderLogisticsResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderLogisticsResponseBody\orderLogistics\fetcher;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderLogisticsResponseBody\orderLogistics\logisticsDetailList;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderLogisticsResponseBody\orderLogistics\receiver;
use AlibabaCloud\Tea\Model;

class orderLogistics extends Model
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
     * @var fetcher
     */
    public $fetcher;

    /**
     * @var string
     */
    public $logisticsCompanyCode;

    /**
     * @var string
     */
    public $logisticsCompanyName;

    /**
     * @var logisticsDetailList
     */
    public $logisticsDetailList;

    /**
     * @var receiver
     */
    public $receiver;
    protected $_name = [
        'dataProvider'         => 'DataProvider',
        'dataProviderTitle'    => 'DataProviderTitle',
        'fetcher'              => 'Fetcher',
        'logisticsCompanyCode' => 'LogisticsCompanyCode',
        'logisticsCompanyName' => 'LogisticsCompanyName',
        'logisticsDetailList'  => 'LogisticsDetailList',
        'receiver'             => 'Receiver',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataProvider) {
            $res['DataProvider'] = $this->dataProvider;
        }
        if (null !== $this->dataProviderTitle) {
            $res['DataProviderTitle'] = $this->dataProviderTitle;
        }
        if (null !== $this->fetcher) {
            $res['Fetcher'] = null !== $this->fetcher ? $this->fetcher->toMap() : null;
        }
        if (null !== $this->logisticsCompanyCode) {
            $res['LogisticsCompanyCode'] = $this->logisticsCompanyCode;
        }
        if (null !== $this->logisticsCompanyName) {
            $res['LogisticsCompanyName'] = $this->logisticsCompanyName;
        }
        if (null !== $this->logisticsDetailList) {
            $res['LogisticsDetailList'] = null !== $this->logisticsDetailList ? $this->logisticsDetailList->toMap() : null;
        }
        if (null !== $this->receiver) {
            $res['Receiver'] = null !== $this->receiver ? $this->receiver->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orderLogistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataProvider'])) {
            $model->dataProvider = $map['DataProvider'];
        }
        if (isset($map['DataProviderTitle'])) {
            $model->dataProviderTitle = $map['DataProviderTitle'];
        }
        if (isset($map['Fetcher'])) {
            $model->fetcher = fetcher::fromMap($map['Fetcher']);
        }
        if (isset($map['LogisticsCompanyCode'])) {
            $model->logisticsCompanyCode = $map['LogisticsCompanyCode'];
        }
        if (isset($map['LogisticsCompanyName'])) {
            $model->logisticsCompanyName = $map['LogisticsCompanyName'];
        }
        if (isset($map['LogisticsDetailList'])) {
            $model->logisticsDetailList = logisticsDetailList::fromMap($map['LogisticsDetailList']);
        }
        if (isset($map['Receiver'])) {
            $model->receiver = receiver::fromMap($map['Receiver']);
        }

        return $model;
    }
}
