<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\ListFilePushStatusesResponseBody;

use AlibabaCloud\Tea\Model;

class pushStatuses extends Model
{
    /**
     * @example f-1671accd4dafdag3er256cvgewt13f7141db2f7
     *
     * @var string
     */
    public $fileId;

    /**
     * @example myfile
     *
     * @var string
     */
    public $fileName;

    /**
     * @example 2024-03-26T16:32:20+08:00
     *
     * @var string
     */
    public $pushTime;

    /**
     * @example render-9f8c57355d224ad7beaf95e145f22111
     *
     * @var string
     */
    public $renderingInstanceId;

    /**
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @example push success
     *
     * @var string
     */
    public $statusDescription;

    /**
     * @example 2024-03-26T17:02:10+08:00
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'fileId'              => 'FileId',
        'fileName'            => 'FileName',
        'pushTime'            => 'PushTime',
        'renderingInstanceId' => 'RenderingInstanceId',
        'status'              => 'Status',
        'statusDescription'   => 'StatusDescription',
        'updateTime'          => 'UpdateTime',
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
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->pushTime) {
            $res['PushTime'] = $this->pushTime;
        }
        if (null !== $this->renderingInstanceId) {
            $res['RenderingInstanceId'] = $this->renderingInstanceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusDescription) {
            $res['StatusDescription'] = $this->statusDescription;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pushStatuses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['PushTime'])) {
            $model->pushTime = $map['PushTime'];
        }
        if (isset($map['RenderingInstanceId'])) {
            $model->renderingInstanceId = $map['RenderingInstanceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusDescription'])) {
            $model->statusDescription = $map['StatusDescription'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
