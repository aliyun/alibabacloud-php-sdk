<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class DescribeInspectionSettingsRequest extends Model
{
    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var int
     */
    public $productType;

    /**
     * @var string
     */
    public $riskDesc;

    /**
     * @var int
     */
    public $riskEnableStatus;

    /**
     * @var string
     */
    public $riskName;

    /**
     * @var int
     */
    public $riskType;
    protected $_name = [
        'operaUid'         => 'OperaUid',
        'productCode'      => 'ProductCode',
        'productType'      => 'ProductType',
        'riskDesc'         => 'RiskDesc',
        'riskEnableStatus' => 'RiskEnableStatus',
        'riskName'         => 'RiskName',
        'riskType'         => 'RiskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->riskDesc) {
            $res['RiskDesc'] = $this->riskDesc;
        }
        if (null !== $this->riskEnableStatus) {
            $res['RiskEnableStatus'] = $this->riskEnableStatus;
        }
        if (null !== $this->riskName) {
            $res['RiskName'] = $this->riskName;
        }
        if (null !== $this->riskType) {
            $res['RiskType'] = $this->riskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInspectionSettingsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['RiskDesc'])) {
            $model->riskDesc = $map['RiskDesc'];
        }
        if (isset($map['RiskEnableStatus'])) {
            $model->riskEnableStatus = $map['RiskEnableStatus'];
        }
        if (isset($map['RiskName'])) {
            $model->riskName = $map['RiskName'];
        }
        if (isset($map['RiskType'])) {
            $model->riskType = $map['RiskType'];
        }

        return $model;
    }
}
