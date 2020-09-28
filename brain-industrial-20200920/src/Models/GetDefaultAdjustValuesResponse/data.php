<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetDefaultAdjustValuesResponse;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetDefaultAdjustValuesResponse\data\defaultAdjustDataInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $status;

    /**
     * @var defaultAdjustDataInfo
     */
    public $defaultAdjustDataInfo;
    protected $_name = [
        'status'                => 'Status',
        'defaultAdjustDataInfo' => 'DefaultAdjustDataInfo',
    ];

    public function validate()
    {
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('defaultAdjustDataInfo', $this->defaultAdjustDataInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->defaultAdjustDataInfo) {
            $res['DefaultAdjustDataInfo'] = null !== $this->defaultAdjustDataInfo ? $this->defaultAdjustDataInfo->toMap() : null;
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
        if (isset($map['DefaultAdjustDataInfo'])) {
            $model->defaultAdjustDataInfo = defaultAdjustDataInfo::fromMap($map['DefaultAdjustDataInfo']);
        }

        return $model;
    }
}
