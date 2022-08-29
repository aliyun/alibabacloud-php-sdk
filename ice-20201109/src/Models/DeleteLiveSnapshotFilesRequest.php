<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DeleteLiveSnapshotFilesRequest extends Model
{
    /**
     * @var int[]
     */
    public $createTimestampList;

    /**
     * @var bool
     */
    public $deleteOriginalFile;

    /**
     * @var string
     */
    public $jobId;
    protected $_name = [
        'createTimestampList' => 'CreateTimestampList',
        'deleteOriginalFile'  => 'DeleteOriginalFile',
        'jobId'               => 'JobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTimestampList) {
            $res['CreateTimestampList'] = $this->createTimestampList;
        }
        if (null !== $this->deleteOriginalFile) {
            $res['DeleteOriginalFile'] = $this->deleteOriginalFile;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLiveSnapshotFilesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTimestampList'])) {
            if (!empty($map['CreateTimestampList'])) {
                $model->createTimestampList = $map['CreateTimestampList'];
            }
        }
        if (isset($map['DeleteOriginalFile'])) {
            $model->deleteOriginalFile = $map['DeleteOriginalFile'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}
