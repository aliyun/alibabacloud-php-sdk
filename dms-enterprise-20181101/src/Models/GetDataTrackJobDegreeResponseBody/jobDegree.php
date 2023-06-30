<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataTrackJobDegreeResponseBody;

use AlibabaCloud\Tea\Model;

class jobDegree extends Model
{
    /**
     * @description The progress of binary log download. Valid values: 0 to 1. A value of 1 indicates that binary log download is complete.
     *
     * @example 1
     *
     * @var float
     */
    public $downloadCompletionDegree;

    /**
     * @description The progress of binary log parsing. Valid values: 0 to 1. A value of 1 indicates that binary log parsing is complete.
     *
     * @example 1
     *
     * @var float
     */
    public $filterCompletionDegree;

    /**
     * @description The status of the data tracking task. Valid values:
     *
     *   **INIT**: The task is being initialized.
     *   **LISTING**: The binary logs are being obtained.
     *   **LIST_SUCCESS**: The binary logs are successfully obtained.
     *   **DOWNLOADING**: The binary logs are being downloaded.
     *   **DOWNLOAD_FAIL**: The binary logs failed to be downloaded.
     *   **DOWNLOAD_SUCCESS**: The binary logs are successfully downloaded.
     *   **FILTERING**: The binary logs are being parsed.
     *   **FILTER_FAIL**: The binary logs failed to be parsed.
     *   **FILTER_SUCCESS**: The binary logs are successfully parsed.
     *
     * @example FILTER_SUCCESS
     *
     * @var string
     */
    public $jobStatus;

    /**
     * @description The progress of binary log obtaining. Valid values: 0 to 1. A value of 1 indicates that binary log obtaining is complete.
     *
     * @example 1
     *
     * @var float
     */
    public $listCompletionDegree;

    /**
     * @description The description of the task status.
     *
     * @example searching success
     *
     * @var string
     */
    public $statusDesc;
    protected $_name = [
        'downloadCompletionDegree' => 'DownloadCompletionDegree',
        'filterCompletionDegree'   => 'FilterCompletionDegree',
        'jobStatus'                => 'JobStatus',
        'listCompletionDegree'     => 'ListCompletionDegree',
        'statusDesc'               => 'StatusDesc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloadCompletionDegree) {
            $res['DownloadCompletionDegree'] = $this->downloadCompletionDegree;
        }
        if (null !== $this->filterCompletionDegree) {
            $res['FilterCompletionDegree'] = $this->filterCompletionDegree;
        }
        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }
        if (null !== $this->listCompletionDegree) {
            $res['ListCompletionDegree'] = $this->listCompletionDegree;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobDegree
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownloadCompletionDegree'])) {
            $model->downloadCompletionDegree = $map['DownloadCompletionDegree'];
        }
        if (isset($map['FilterCompletionDegree'])) {
            $model->filterCompletionDegree = $map['FilterCompletionDegree'];
        }
        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }
        if (isset($map['ListCompletionDegree'])) {
            $model->listCompletionDegree = $map['ListCompletionDegree'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }

        return $model;
    }
}
