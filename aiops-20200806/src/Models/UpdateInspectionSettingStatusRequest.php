<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class UpdateInspectionSettingStatusRequest extends Model
{
    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var string
     */
    public $riskCode;

    /**
     * @var int
     */
    public $riskEnableStatus;
    protected $_name = [
        'operaUid'         => 'OperaUid',
        'riskCode'         => 'RiskCode',
        'riskEnableStatus' => 'RiskEnableStatus',
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
        if (null !== $this->riskCode) {
            $res['RiskCode'] = $this->riskCode;
        }
        if (null !== $this->riskEnableStatus) {
            $res['RiskEnableStatus'] = $this->riskEnableStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateInspectionSettingStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['RiskCode'])) {
            $model->riskCode = $map['RiskCode'];
        }
        if (isset($map['RiskEnableStatus'])) {
            $model->riskEnableStatus = $map['RiskEnableStatus'];
        }

        return $model;
    }
}
