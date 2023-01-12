<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderLogisticsWithDesignatedTbUidResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderLogisticsWithDesignatedTbUidResponseBody\model\fetcher;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderLogisticsWithDesignatedTbUidResponseBody\model\logisticsDetailList;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderLogisticsWithDesignatedTbUidResponseBody\model\packageGoodItems;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderLogisticsWithDesignatedTbUidResponseBody\model\receiver;
use AlibabaCloud\Tea\Model;

class model_ extends Model
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
     * @var logisticsDetailList[]
     */
    public $logisticsDetailList;

    /**
     * @var string
     */
    public $mailNo;

    /**
     * @var packageGoodItems[]
     */
    public $packageGoodItems;

    /**
     * @var receiver
     */
    public $receiver;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataProvider'         => 'DataProvider',
        'dataProviderTitle'    => 'DataProviderTitle',
        'fetcher'              => 'Fetcher',
        'logisticsCompanyCode' => 'LogisticsCompanyCode',
        'logisticsCompanyName' => 'LogisticsCompanyName',
        'logisticsDetailList'  => 'LogisticsDetailList',
        'mailNo'               => 'MailNo',
        'packageGoodItems'     => 'PackageGoodItems',
        'receiver'             => 'Receiver',
        'requestId'            => 'RequestId',
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
            $res['LogisticsDetailList'] = [];
            if (null !== $this->logisticsDetailList && \is_array($this->logisticsDetailList)) {
                $n = 0;
                foreach ($this->logisticsDetailList as $item) {
                    $res['LogisticsDetailList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->mailNo) {
            $res['MailNo'] = $this->mailNo;
        }
        if (null !== $this->packageGoodItems) {
            $res['PackageGoodItems'] = [];
            if (null !== $this->packageGoodItems && \is_array($this->packageGoodItems)) {
                $n = 0;
                foreach ($this->packageGoodItems as $item) {
                    $res['PackageGoodItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->receiver) {
            $res['Receiver'] = null !== $this->receiver ? $this->receiver->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
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
            if (!empty($map['LogisticsDetailList'])) {
                $model->logisticsDetailList = [];
                $n                          = 0;
                foreach ($map['LogisticsDetailList'] as $item) {
                    $model->logisticsDetailList[$n++] = null !== $item ? logisticsDetailList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MailNo'])) {
            $model->mailNo = $map['MailNo'];
        }
        if (isset($map['PackageGoodItems'])) {
            if (!empty($map['PackageGoodItems'])) {
                $model->packageGoodItems = [];
                $n                       = 0;
                foreach ($map['PackageGoodItems'] as $item) {
                    $model->packageGoodItems[$n++] = null !== $item ? packageGoodItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Receiver'])) {
            $model->receiver = receiver::fromMap($map['Receiver']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
