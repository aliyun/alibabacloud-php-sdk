<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPvCustomSimulationValuesResponse;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPvCustomSimulationValuesResponse\data\pvCustomSimulateDataInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $status;

    /**
     * @var pvCustomSimulateDataInfo
     */
    public $pvCustomSimulateDataInfo;
    protected $_name = [
        'status'                   => 'Status',
        'pvCustomSimulateDataInfo' => 'PvCustomSimulateDataInfo',
    ];

    public function validate()
    {
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('pvCustomSimulateDataInfo', $this->pvCustomSimulateDataInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->pvCustomSimulateDataInfo) {
            $res['PvCustomSimulateDataInfo'] = null !== $this->pvCustomSimulateDataInfo ? $this->pvCustomSimulateDataInfo->toMap() : null;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['PvCustomSimulateDataInfo'])) {
            $model->pvCustomSimulateDataInfo = pvCustomSimulateDataInfo::fromMap($map['PvCustomSimulateDataInfo']);
        }

        return $model;
    }
}
