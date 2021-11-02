<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderInfoAfterSaleResponseBody\model\logisticsList;

use AlibabaCloud\Tea\Model;

class logistics extends Model
{
    /**
     * @var string
     */
    public $logisticsCompanyCode;

    /**
     * @var string
     */
    public $logisticsCompanyName;

    /**
     * @var string
     */
    public $logisticsNo;

    /**
     * @var string
     */
    public $logisticsStatus;
    protected $_name = [
        'logisticsCompanyCode' => 'LogisticsCompanyCode',
        'logisticsCompanyName' => 'LogisticsCompanyName',
        'logisticsNo'          => 'LogisticsNo',
        'logisticsStatus'      => 'LogisticsStatus',
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
        if (null !== $this->logisticsCompanyName) {
            $res['LogisticsCompanyName'] = $this->logisticsCompanyName;
        }
        if (null !== $this->logisticsNo) {
            $res['LogisticsNo'] = $this->logisticsNo;
        }
        if (null !== $this->logisticsStatus) {
            $res['LogisticsStatus'] = $this->logisticsStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogisticsCompanyCode'])) {
            $model->logisticsCompanyCode = $map['LogisticsCompanyCode'];
        }
        if (isset($map['LogisticsCompanyName'])) {
            $model->logisticsCompanyName = $map['LogisticsCompanyName'];
        }
        if (isset($map['LogisticsNo'])) {
            $model->logisticsNo = $map['LogisticsNo'];
        }
        if (isset($map['LogisticsStatus'])) {
            $model->logisticsStatus = $map['LogisticsStatus'];
        }

        return $model;
    }
}
