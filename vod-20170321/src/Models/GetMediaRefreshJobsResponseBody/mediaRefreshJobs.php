<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaRefreshJobsResponseBody;

use AlibabaCloud\Tea\Model;

class mediaRefreshJobs extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $filterPolicy;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $mediaRefreshJobId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $successPlayUrls;

    /**
     * @var string
     */
    public $taskIds;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'errorCode'         => 'ErrorCode',
        'errorMessage'      => 'ErrorMessage',
        'filterPolicy'      => 'FilterPolicy',
        'gmtCreate'         => 'GmtCreate',
        'gmtModified'       => 'GmtModified',
        'mediaId'           => 'MediaId',
        'mediaRefreshJobId' => 'MediaRefreshJobId',
        'status'            => 'Status',
        'successPlayUrls'   => 'SuccessPlayUrls',
        'taskIds'           => 'TaskIds',
        'taskType'          => 'TaskType',
        'userData'          => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->filterPolicy) {
            $res['FilterPolicy'] = $this->filterPolicy;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->mediaRefreshJobId) {
            $res['MediaRefreshJobId'] = $this->mediaRefreshJobId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->successPlayUrls) {
            $res['SuccessPlayUrls'] = $this->successPlayUrls;
        }
        if (null !== $this->taskIds) {
            $res['TaskIds'] = $this->taskIds;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaRefreshJobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['FilterPolicy'])) {
            $model->filterPolicy = $map['FilterPolicy'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['MediaRefreshJobId'])) {
            $model->mediaRefreshJobId = $map['MediaRefreshJobId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SuccessPlayUrls'])) {
            $model->successPlayUrls = $map['SuccessPlayUrls'];
        }
        if (isset($map['TaskIds'])) {
            $model->taskIds = $map['TaskIds'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
