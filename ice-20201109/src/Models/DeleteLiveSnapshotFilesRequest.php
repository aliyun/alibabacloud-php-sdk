<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DeleteLiveSnapshotFilesRequest extends Model
{
    /**
     * @description The list of timestamps when the jobs were created. The values are UNIX timestamps representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC. A maximum of 200 jobs can be deleted at a time.
     *
     * This parameter is required.
     * @var int[]
     */
    public $createTimestampList;

    /**
     * @description Specifies whether to delete the original files at the same time. Default value: false.
     *
     * @example true
     *
     * @var bool
     */
    public $deleteOriginalFile;

    /**
     * @description The ID of the snapshot job.
     *
     * This parameter is required.
     * @example ****a046-263c-3560-978a-fb287782****
     *
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
