<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipelineInstanceInfoResponseBody;

use AlibabaCloud\Tea\Model;

class object extends Model
{
    /**
     * @var string
     */
    public $employeeId;

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
     * @var string
     */
    public $sources;

    /**
     * @var string[]
     */
    public $dockerImages;

    /**
     * @var string[]
     */
    public $packageDownloadUrls;
    protected $_name = [
        'employeeId'          => 'EmployeeId',
        'endTime'             => 'EndTime',
        'status'              => 'Status',
        'startTime'           => 'StartTime',
        'sources'             => 'Sources',
        'dockerImages'        => 'DockerImages',
        'packageDownloadUrls' => 'PackageDownloadUrls',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->employeeId) {
            $res['EmployeeId'] = $this->employeeId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->sources) {
            $res['Sources'] = $this->sources;
        }
        if (null !== $this->dockerImages) {
            $res['DockerImages'] = $this->dockerImages;
        }
        if (null !== $this->packageDownloadUrls) {
            $res['PackageDownloadUrls'] = $this->packageDownloadUrls;
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
        if (isset($map['EmployeeId'])) {
            $model->employeeId = $map['EmployeeId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Sources'])) {
            $model->sources = $map['Sources'];
        }
        if (isset($map['DockerImages'])) {
            if (!empty($map['DockerImages'])) {
                $model->dockerImages = $map['DockerImages'];
            }
        }
        if (isset($map['PackageDownloadUrls'])) {
            if (!empty($map['PackageDownloadUrls'])) {
                $model->packageDownloadUrls = $map['PackageDownloadUrls'];
            }
        }

        return $model;
    }
}
