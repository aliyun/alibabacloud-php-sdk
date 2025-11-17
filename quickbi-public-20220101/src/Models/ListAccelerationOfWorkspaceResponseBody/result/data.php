<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListAccelerationOfWorkspaceResponseBody\result;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var string
     */
    public $cubeId;

    /**
     * @var string
     */
    public $cubeName;

    /**
     * @var string
     */
    public $enableQuickindexTime;

    /**
     * @var string
     */
    public $jobHistoryId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $jobStatus;

    /**
     * @var string
     */
    public $lastModifyTime;

    /**
     * @var string
     */
    public $size;
    protected $_name = [
        'creatorName' => 'CreatorName',
        'cubeId' => 'CubeId',
        'cubeName' => 'CubeName',
        'enableQuickindexTime' => 'EnableQuickindexTime',
        'jobHistoryId' => 'JobHistoryId',
        'jobId' => 'JobId',
        'jobStatus' => 'JobStatus',
        'lastModifyTime' => 'LastModifyTime',
        'size' => 'Size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }

        if (null !== $this->cubeId) {
            $res['CubeId'] = $this->cubeId;
        }

        if (null !== $this->cubeName) {
            $res['CubeName'] = $this->cubeName;
        }

        if (null !== $this->enableQuickindexTime) {
            $res['EnableQuickindexTime'] = $this->enableQuickindexTime;
        }

        if (null !== $this->jobHistoryId) {
            $res['JobHistoryId'] = $this->jobHistoryId;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }

        if (null !== $this->lastModifyTime) {
            $res['LastModifyTime'] = $this->lastModifyTime;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }

        if (isset($map['CubeId'])) {
            $model->cubeId = $map['CubeId'];
        }

        if (isset($map['CubeName'])) {
            $model->cubeName = $map['CubeName'];
        }

        if (isset($map['EnableQuickindexTime'])) {
            $model->enableQuickindexTime = $map['EnableQuickindexTime'];
        }

        if (isset($map['JobHistoryId'])) {
            $model->jobHistoryId = $map['JobHistoryId'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }

        if (isset($map['LastModifyTime'])) {
            $model->lastModifyTime = $map['LastModifyTime'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
