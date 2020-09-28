<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetLowModelPerformValuesResponse;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetLowModelPerformValuesResponse\data\lowModelPerformDataInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $status;

    /**
     * @var lowModelPerformDataInfo
     */
    public $lowModelPerformDataInfo;
    protected $_name = [
        'status'                  => 'Status',
        'lowModelPerformDataInfo' => 'LowModelPerformDataInfo',
    ];

    public function validate()
    {
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('lowModelPerformDataInfo', $this->lowModelPerformDataInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->lowModelPerformDataInfo) {
            $res['LowModelPerformDataInfo'] = null !== $this->lowModelPerformDataInfo ? $this->lowModelPerformDataInfo->toMap() : null;
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
        if (isset($map['LowModelPerformDataInfo'])) {
            $model->lowModelPerformDataInfo = lowModelPerformDataInfo::fromMap($map['LowModelPerformDataInfo']);
        }

        return $model;
    }
}
