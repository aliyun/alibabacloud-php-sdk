<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportOrderDetailResponseBody\dataExportOrderDetail;

use AlibabaCloud\Tea\Model;

class keyInfo extends Model
{
    /**
     * @var int
     */
    public $preCheckId;

    /**
     * @var string
     */
    public $jobStatus;
    protected $_name = [
        'preCheckId' => 'PreCheckId',
        'jobStatus'  => 'JobStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->preCheckId) {
            $res['PreCheckId'] = $this->preCheckId;
        }
        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
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
        if (isset($map['PreCheckId'])) {
            $model->preCheckId = $map['PreCheckId'];
        }
        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }

        return $model;
    }
}
