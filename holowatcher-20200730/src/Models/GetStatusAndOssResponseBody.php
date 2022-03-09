<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class GetStatusAndOssResponseBody extends Model
{
    /**
     * @var string
     */
    public $datasetPublishStatus;

    /**
     * @var string
     */
    public $fullName;

    /**
     * @var string
     */
    public $gmtPublished;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $pipelineStatus;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'datasetPublishStatus' => 'DatasetPublishStatus',
        'fullName'             => 'FullName',
        'gmtPublished'         => 'GmtPublished',
        'icon'                 => 'Icon',
        'nickName'             => 'NickName',
        'pipelineStatus'       => 'PipelineStatus',
        'projectId'            => 'ProjectId',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetPublishStatus) {
            $res['DatasetPublishStatus'] = $this->datasetPublishStatus;
        }
        if (null !== $this->fullName) {
            $res['FullName'] = $this->fullName;
        }
        if (null !== $this->gmtPublished) {
            $res['GmtPublished'] = $this->gmtPublished;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }
        if (null !== $this->pipelineStatus) {
            $res['PipelineStatus'] = $this->pipelineStatus;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStatusAndOssResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetPublishStatus'])) {
            $model->datasetPublishStatus = $map['DatasetPublishStatus'];
        }
        if (isset($map['FullName'])) {
            $model->fullName = $map['FullName'];
        }
        if (isset($map['GmtPublished'])) {
            $model->gmtPublished = $map['GmtPublished'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }
        if (isset($map['PipelineStatus'])) {
            $model->pipelineStatus = $map['PipelineStatus'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
