<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportOrderDetailResponseBody\dataExportOrderDetail;

use AlibabaCloud\Dara\Model;

class keyInfo extends Model
{
    /**
     * @var int
     */
    public $jobId;
    /**
     * @var string
     */
    public $jobStatus;
    /**
     * @var int
     */
    public $preCheckId;
    protected $_name = [
        'jobId'      => 'JobId',
        'jobStatus'  => 'JobStatus',
        'preCheckId' => 'PreCheckId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }

        if (null !== $this->preCheckId) {
            $res['PreCheckId'] = $this->preCheckId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }

        if (isset($map['PreCheckId'])) {
            $model->preCheckId = $map['PreCheckId'];
        }

        return $model;
    }
}
