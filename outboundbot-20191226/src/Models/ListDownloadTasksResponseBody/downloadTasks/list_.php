<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListDownloadTasksResponseBody\downloadTasks;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListDownloadTasksResponseBody\downloadTasks\list_\downloadTaskFiles;

class list_ extends Model
{
    /**
     * @var downloadTaskFiles[]
     */
    public $downloadTaskFiles;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'downloadTaskFiles' => 'DownloadTaskFiles',
        'expireTime' => 'ExpireTime',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->downloadTaskFiles)) {
            Model::validateArray($this->downloadTaskFiles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->downloadTaskFiles) {
            if (\is_array($this->downloadTaskFiles)) {
                $res['DownloadTaskFiles'] = [];
                $n1 = 0;
                foreach ($this->downloadTaskFiles as $item1) {
                    $res['DownloadTaskFiles'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['DownloadTaskFiles'])) {
            if (!empty($map['DownloadTaskFiles'])) {
                $model->downloadTaskFiles = [];
                $n1 = 0;
                foreach ($map['DownloadTaskFiles'] as $item1) {
                    $model->downloadTaskFiles[$n1++] = downloadTaskFiles::fromMap($item1);
                }
            }
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
