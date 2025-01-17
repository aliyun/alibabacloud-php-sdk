<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class DeleteLiveSnapshotFilesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $createTimestampListShrink;
    /**
     * @var bool
     */
    public $deleteOriginalFile;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
