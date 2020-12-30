<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipelineInstanceInfoResponseBody;

use AlibabaCloud\Tea\Model;

class object extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string[]
     */
    public $packageDownloadUrls;

    /**
     * @var string
     */
    public $employeeId;

    /**
     * @var string[]
     */
    public $dockerImages;

    /**
     * @var string
     */
    public $sources;
    protected $_name = [
        'endTime'             => 'EndTime',
        'status'              => 'Status',
        'startTime'           => 'StartTime',
        'packageDownloadUrls' => 'PackageDownloadUrls',
        'employeeId'          => 'EmployeeId',
        'dockerImages'        => 'DockerImages',
        'sources'             => 'Sources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->packageDownloadUrls) {
            $res['PackageDownloadUrls'] = $this->packageDownloadUrls;
        }
        if (null !== $this->employeeId) {
            $res['EmployeeId'] = $this->employeeId;
        }
        if (null !== $this->dockerImages) {
            $res['DockerImages'] = $this->dockerImages;
        }
        if (null !== $this->sources) {
            $res['Sources'] = $this->sources;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return object
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['PackageDownloadUrls'])) {
            if (!empty($map['PackageDownloadUrls'])) {
                $model->packageDownloadUrls = $map['PackageDownloadUrls'];
            }
        }
        if (isset($map['EmployeeId'])) {
            $model->employeeId = $map['EmployeeId'];
        }
        if (isset($map['DockerImages'])) {
            if (!empty($map['DockerImages'])) {
                $model->dockerImages = $map['DockerImages'];
            }
        }
        if (isset($map['Sources'])) {
            $model->sources = $map['Sources'];
        }

        return $model;
    }
}
