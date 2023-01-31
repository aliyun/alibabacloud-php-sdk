<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListDownloadTasksResponseBody\downloadTasks\list_;

use AlibabaCloud\Tea\Model;

class downloadTaskFiles extends Model
{
    /**
     * @example UPLOADED/RECORDING/d5c651b3-3c0f-44b8-aafd-40526f2fb43d/dd33377f-abad-471b-84dd-04aed572ce60_2.wav
     *
     * @var string
     */
    public $fileId;

    /**
     * @example 10
     *
     * @var int
     */
    public $progress;

    /**
     * @example Empty
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'fileId'   => 'FileId',
        'progress' => 'Progress',
        'status'   => 'Status',
        'title'    => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return downloadTaskFiles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
