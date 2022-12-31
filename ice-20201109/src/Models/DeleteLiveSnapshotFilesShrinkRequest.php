<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DeleteLiveSnapshotFilesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $createTimestampListShrink;

    /**
     * @example true
     *
     * @var bool
     */
    public $deleteOriginalFile;

    /**
     * @example ****a046-263c-3560-978a-fb287782****
     *
     * @var string
     */
    public $jobId;
    protected $_name = [
        'createTimestampListShrink' => 'CreateTimestampList',
        'deleteOriginalFile'        => 'DeleteOriginalFile',
        'jobId'                     => 'JobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTimestampListShrink) {
            $res['CreateTimestampList'] = $this->createTimestampListShrink;
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
     * @return DeleteLiveSnapshotFilesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTimestampList'])) {
            $model->createTimestampListShrink = $map['CreateTimestampList'];
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
