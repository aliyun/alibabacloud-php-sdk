<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->createTimestampList)) {
            Model::validateArray($this->createTimestampList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTimestampList) {
            if (\is_array($this->createTimestampList)) {
                $res['CreateTimestampList'] = [];
                $n1                         = 0;
                foreach ($this->createTimestampList as $item1) {
                    $res['CreateTimestampList'][$n1++] = $item1;
                }
            }
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
            if (!empty($map['CreateTimestampList'])) {
                $model->createTimestampList = [];
                $n1                         = 0;
                foreach ($map['CreateTimestampList'] as $item1) {
                    $model->createTimestampList[$n1++] = $item1;
                }
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
