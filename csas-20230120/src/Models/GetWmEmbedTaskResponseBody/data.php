<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\GetWmEmbedTaskResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example https://example.com/embed-****.pdf
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @example 171859****
     *
     * @var string
     */
    public $fileUrlExp;

    /**
     * @example embed-****.pdf
     *
     * @var string
     */
    public $filename;

    /**
     * @example d41d8cd98f00b204e9800998ecf8****
     *
     * @var string
     */
    public $outFileHashMd5;

    /**
     * @example 123**
     *
     * @var int
     */
    public $outFileSize;

    /**
     * @example job:5GfrJYsoaffmCE7Z5bZtjUxxxxxxxxxx
     *
     * @var string
     */
    public $taskId;

    /**
     * @example Success
     *
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'fileUrl'        => 'FileUrl',
        'fileUrlExp'     => 'FileUrlExp',
        'filename'       => 'Filename',
        'outFileHashMd5' => 'OutFileHashMd5',
        'outFileSize'    => 'OutFileSize',
        'taskId'         => 'TaskId',
        'taskStatus'     => 'TaskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->fileUrlExp) {
            $res['FileUrlExp'] = $this->fileUrlExp;
        }
        if (null !== $this->filename) {
            $res['Filename'] = $this->filename;
        }
        if (null !== $this->outFileHashMd5) {
            $res['OutFileHashMd5'] = $this->outFileHashMd5;
        }
        if (null !== $this->outFileSize) {
            $res['OutFileSize'] = $this->outFileSize;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['FileUrlExp'])) {
            $model->fileUrlExp = $map['FileUrlExp'];
        }
        if (isset($map['Filename'])) {
            $model->filename = $map['Filename'];
        }
        if (isset($map['OutFileHashMd5'])) {
            $model->outFileHashMd5 = $map['OutFileHashMd5'];
        }
        if (isset($map['OutFileSize'])) {
            $model->outFileSize = $map['OutFileSize'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
