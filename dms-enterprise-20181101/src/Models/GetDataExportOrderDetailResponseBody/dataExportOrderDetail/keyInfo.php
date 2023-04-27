<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportOrderDetailResponseBody\dataExportOrderDetail;

use AlibabaCloud\Tea\Model;

class keyInfo extends Model
{
    /**
     * @example EXPORT_SUCCESS
     *
     * @var string
     */
    public $jobStatus;

    /**
     * @var int
     */
    public $preCheckId;
    protected $_name = [
        'jobStatus'  => 'JobStatus',
        'preCheckId' => 'PreCheckId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }
        if (null !== $this->preCheckId) {
            $res['PreCheckId'] = $this->preCheckId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keyInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }
        if (isset($map['PreCheckId'])) {
            $model->preCheckId = $map['PreCheckId'];
        }

        return $model;
    }
}
