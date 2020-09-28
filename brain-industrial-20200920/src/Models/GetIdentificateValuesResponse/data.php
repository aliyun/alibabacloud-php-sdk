<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetIdentificateValuesResponse;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetIdentificateValuesResponse\data\identificateDataInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $status;

    /**
     * @var identificateDataInfo
     */
    public $identificateDataInfo;
    protected $_name = [
        'status'               => 'Status',
        'identificateDataInfo' => 'IdentificateDataInfo',
    ];

    public function validate()
    {
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('identificateDataInfo', $this->identificateDataInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->identificateDataInfo) {
            $res['IdentificateDataInfo'] = null !== $this->identificateDataInfo ? $this->identificateDataInfo->toMap() : null;
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
        if (isset($map['IdentificateDataInfo'])) {
            $model->identificateDataInfo = identificateDataInfo::fromMap($map['IdentificateDataInfo']);
        }

        return $model;
    }
}
