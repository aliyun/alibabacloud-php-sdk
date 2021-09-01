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
    public $logisticsNo;

    /**
     * @var string
     */
    public $logisticsStatus;

    /**
     * @var string
     */
    public $logisticsCompanyName;
    protected $_name = [
        'logisticsCompanyCode' => 'LogisticsCompanyCode',
        'logisticsNo'          => 'LogisticsNo',
        'logisticsStatus'      => 'LogisticsStatus',
        'logisticsCompanyName' => 'LogisticsCompanyName',
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
        if (null !== $this->logisticsNo) {
            $res['LogisticsNo'] = $this->logisticsNo;
        }
        if (null !== $this->logisticsStatus) {
            $res['LogisticsStatus'] = $this->logisticsStatus;
        }
        if (null !== $this->logisticsCompanyName) {
            $res['LogisticsCompanyName'] = $this->logisticsCompanyName;
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
        if (isset($map['LogisticsNo'])) {
            $model->logisticsNo = $map['LogisticsNo'];
        }
        if (isset($map['LogisticsStatus'])) {
            $model->logisticsStatus = $map['LogisticsStatus'];
        }
        if (isset($map['LogisticsCompanyName'])) {
            $model->logisticsCompanyName = $map['LogisticsCompanyName'];
        }

        return $model;
    }
}
