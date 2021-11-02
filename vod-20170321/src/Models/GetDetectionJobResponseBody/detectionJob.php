<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetDetectionJobResponseBody;

use AlibabaCloud\Tea\Model;

class detectionJob extends Model
{
    /**
     * @var string
     */
    public $beginTime;

    /**
     * @var string
     */
    public $copyrightBeginTime;

    /**
     * @var string
     */
    public $copyrightEndTime;

    /**
     * @var string
     */
    public $copyrightFile;

    /**
     * @var string
     */
    public $copyrightStatus;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $videoId;

    /**
     * @var string
     */
    public $whitelistUrls;
    protected $_name = [
        'beginTime'          => 'BeginTime',
        'copyrightBeginTime' => 'CopyrightBeginTime',
        'copyrightEndTime'   => 'CopyrightEndTime',
        'copyrightFile'      => 'CopyrightFile',
        'copyrightStatus'    => 'CopyrightStatus',
        'createTime'         => 'CreateTime',
        'endTime'            => 'EndTime',
        'jobId'              => 'JobId',
        'modifyTime'         => 'ModifyTime',
        'templateId'         => 'TemplateId',
        'videoId'            => 'VideoId',
        'whitelistUrls'      => 'WhitelistUrls',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->copyrightBeginTime) {
            $res['CopyrightBeginTime'] = $this->copyrightBeginTime;
        }
        if (null !== $this->copyrightEndTime) {
            $res['CopyrightEndTime'] = $this->copyrightEndTime;
        }
        if (null !== $this->copyrightFile) {
            $res['CopyrightFile'] = $this->copyrightFile;
        }
        if (null !== $this->copyrightStatus) {
            $res['CopyrightStatus'] = $this->copyrightStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->whitelistUrls) {
            $res['WhitelistUrls'] = $this->whitelistUrls;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detectionJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['CopyrightBeginTime'])) {
            $model->copyrightBeginTime = $map['CopyrightBeginTime'];
        }
        if (isset($map['CopyrightEndTime'])) {
            $model->copyrightEndTime = $map['CopyrightEndTime'];
        }
        if (isset($map['CopyrightFile'])) {
            $model->copyrightFile = $map['CopyrightFile'];
        }
        if (isset($map['CopyrightStatus'])) {
            $model->copyrightStatus = $map['CopyrightStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['WhitelistUrls'])) {
            $model->whitelistUrls = $map['WhitelistUrls'];
        }

        return $model;
    }
}
