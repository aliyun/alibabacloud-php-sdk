<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPvIdentSimulationValuesResponse;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPvIdentSimulationValuesResponse\data\pvIdentSimulateDataInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $status;

    /**
     * @var pvIdentSimulateDataInfo
     */
    public $pvIdentSimulateDataInfo;
    protected $_name = [
        'status'                  => 'Status',
        'pvIdentSimulateDataInfo' => 'PvIdentSimulateDataInfo',
    ];

    public function validate()
    {
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('pvIdentSimulateDataInfo', $this->pvIdentSimulateDataInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->pvIdentSimulateDataInfo) {
            $res['PvIdentSimulateDataInfo'] = null !== $this->pvIdentSimulateDataInfo ? $this->pvIdentSimulateDataInfo->toMap() : null;
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
        if (isset($map['PvIdentSimulateDataInfo'])) {
            $model->pvIdentSimulateDataInfo = pvIdentSimulateDataInfo::fromMap($map['PvIdentSimulateDataInfo']);
        }

        return $model;
    }
}
