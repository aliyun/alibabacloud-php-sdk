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
     * @var receiver
     */
    public $receiver;

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
     * @var string
     */
    public $logisticsCompanyCode;

    /**
     * @var string
     */
    public $logisticsCompanyName;

    /**
     * @var fetcher
     */
    public $fetcher;
    protected $_name = [
        'receiver'             => 'Receiver',
        'dataProvider'         => 'DataProvider',
        'dataProviderTitle'    => 'DataProviderTitle',
        'logisticsDetailList'  => 'LogisticsDetailList',
        'logisticsCompanyCode' => 'LogisticsCompanyCode',
        'logisticsCompanyName' => 'LogisticsCompanyName',
        'fetcher'              => 'Fetcher',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->receiver) {
            $res['Receiver'] = null !== $this->receiver ? $this->receiver->toMap() : null;
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
        if (null !== $this->logisticsCompanyCode) {
            $res['LogisticsCompanyCode'] = $this->logisticsCompanyCode;
        }
        if (null !== $this->logisticsCompanyName) {
            $res['LogisticsCompanyName'] = $this->logisticsCompanyName;
        }
        if (null !== $this->fetcher) {
            $res['Fetcher'] = null !== $this->fetcher ? $this->fetcher->toMap() : null;
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
        if (isset($map['Receiver'])) {
            $model->receiver = receiver::fromMap($map['Receiver']);
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
        if (isset($map['LogisticsCompanyCode'])) {
            $model->logisticsCompanyCode = $map['LogisticsCompanyCode'];
        }
        if (isset($map['LogisticsCompanyName'])) {
            $model->logisticsCompanyName = $map['LogisticsCompanyName'];
        }
        if (isset($map['Fetcher'])) {
            $model->fetcher = fetcher::fromMap($map['Fetcher']);
        }

        return $model;
    }
}
