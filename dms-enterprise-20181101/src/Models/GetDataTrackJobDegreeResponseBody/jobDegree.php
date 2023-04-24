<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataTrackJobDegreeResponseBody;

use AlibabaCloud\Tea\Model;

class jobDegree extends Model
{
    /**
     * @example 1
     *
     * @var float
     */
    public $downloadCompletionDegree;

    /**
     * @example 1
     *
     * @var float
     */
    public $filterCompletionDegree;

    /**
     * @example FILTER_SUCCESS
     *
     * @var string
     */
    public $jobStatus;

    /**
     * @example 1
     *
     * @var float
     */
    public $listCompletionDegree;

    /**
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
