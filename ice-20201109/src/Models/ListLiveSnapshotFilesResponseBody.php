<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveSnapshotFilesResponseBody\fileList;

class ListLiveSnapshotFilesResponseBody extends Model
{
    /**
     * @var fileList[]
     */
    public $fileList;
    /**
     * @var string
     */
    public $nextStartTime;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fileList'      => 'FileList',
        'nextStartTime' => 'NextStartTime',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->fileList)) {
            Model::validateArray($this->fileList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileList) {
            if (\is_array($this->fileList)) {
                $res['FileList'] = [];
                $n1              = 0;
                foreach ($this->fileList as $item1) {
                    $res['FileList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nextStartTime) {
            $res['NextStartTime'] = $this->nextStartTime;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['FileList'])) {
            if (!empty($map['FileList'])) {
                $model->fileList = [];
                $n1              = 0;
                foreach ($map['FileList'] as $item1) {
                    $model->fileList[$n1++] = fileList::fromMap($item1);
                }
            }
        }

        if (isset($map['NextStartTime'])) {
            $model->nextStartTime = $map['NextStartTime'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
